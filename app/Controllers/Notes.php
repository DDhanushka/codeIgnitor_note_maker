<?php namespace App\Controllers;
use App\Models\NoteModel;
use CodeIgniter\Controller;

// $slug ==> title of the note withoud spaces
// ex:
// This is my note ===> This-is-my-note

class Notes extends Controller {

    // Default => View all notes
    public function index() {
        $model = new NoteModel();
        $data = [
            'title' => 'All notes',
            'heading' => 'Manage all your notes',
            'note' => $model->getAllNotes(),
        ];
        echo view('header', $data);
        echo view('overview', $data);
        echo view('footer', $data);
    }

    // View the selected note
    public function viewNote($slug) {
        $model = new NoteModel();
        $data = [
            'title' => $slug,
            'heading'=> $slug,
            'note'=> $model->getNote($slug),
        ];
        echo view('header', $data);
        echo view('view', $data);
        echo view('footer', $data);
    }

    // Create a new note
    public function create() {
        helper(['form', 'url']);
        $model = new NoteModel();
        // Validate the user input
        if ($this->request->getMethod() === 'post' && $this->validate([
                'title' => 'required|min_length[3]|max_length[50]',
                'body'  => 'required'
                
            ]))
        {
            // Save data on the DB
            $model->save([
                'title' => $this->request->getPost('title'),
                'slug'  => url_title($this->request->getPost('title'), '-', TRUE),
                'body'  => $this->request->getPost('body'),
                'dateTime' => date("Y-m-d H:i:s"),
            ]);
            // Get the title for the created note
            $noteItem = url_title($this->request->getPost('title'), '-', TRUE);
            echo view('header', ['heading' => 'Success', 'title' => 'Success']);
            echo view('success', ['noteItem' => $noteItem, 'message'=> 'created sucussfully.']);
            echo view('footer');
        }
        else // Data validation failed
        {
            // Reload the create page
            echo view('header', ['heading' => 'Make a new note', 'title' => 'New note']);
            echo view('create');
            echo view('footer');
        }
    }

    // Remove the selected note
    public function remove($slug) {
        $model = new NoteModel();

        $model->where('slug', $slug)->delete();

        $data = [
            'slug' => $slug,
            'heading' => 'Removed'. ' ' . $slug,
            'title' => 'Removed'
        ];
        echo view('header', $data);
        echo view('removed', $data);
        echo view('footer', $data);
    }

    // Retrieve data of the selected note that is to be updated
    public function readyUpdate($slug) {

        $model = new NoteModel();
        $data = [
            'title' => $slug,
            'heading'=> $slug,
            'note'=> $model->getNote($slug),
        ];
        echo view('header', $data);
        echo view('update', $data);     // Data is passed to the update view (update Form)
        echo view('footer', $data);
    }

    // Update the selected note
    public function updateNote($slug) {
        helper(['form', 'url']);

        $model = new NoteModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
                'title' => 'required|min_length[3]|max_length[255]',
                'body'  => 'required'
            ]))
        {
            $data = [
                'title' => $this->request->getPost('title'),
                'slug'  => url_title($this->request->getPost('title'), '-', TRUE),
                'body'  => $this->request->getPost('body'),
                // 'dateTime' => date("Y-m-d H:i:s"),
            ];
            $model->whereIn('slug', [$slug])
            ->set(['title'=>$data['title'], 'body'=>$data['body'], 'slug'=>$data['slug'], 'dateTime'=>date("Y-m-d H:i:s")])
            ->update();
            $noteItem = url_title($this->request->getPost('title'), '-', TRUE);
            echo view('header', ['heading' => 'Update Success', 'title' => 'Success']);
            echo view('success', ['noteItem' => $noteItem, 'message'=> 'updated sucussfully.', 'slug'=>$slug]);
            echo view('footer');
        }
        else
        {
            echo view('header', ['heading' => 'Make a new note', 'title' => 'New note']);
            echo view('notes');
            echo view('footer');
        }
    }

    // Create report
    public function report() {
        $model = new NoteModel();
        $data = [
            'title' => 'Report',
            'heading' => 'Get a report',
            'note' => $model->getAllNotes(),
        ];
        // Count the number of notes
        $noteCount = count($data['note']);
        $data['noteCount'] = $noteCount;

        echo view('header', $data);
        echo view('report', $data);
        echo view('footer', $data);
    }
    
}