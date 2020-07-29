<?php namespace App\Models;
use CodeIgniter\Model;

// Model for the notes
// $slug ==> title of the note withoud spaces
// ex:
// This is my note ===> This-is-my-note

$db      = \Config\Database::connect();
$builder = $db->table('notes');

class NoteModel extends Model {
    // Table ===> 'notes'
    protected $table      = 'notes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'slug', 'body', 'dateTime'];

    // Select all notes
    // Order by DateTime
    public function getAllNotes() {
        return $this->orderBy('dateTime', 'DESC')->findAll();
    }

    // Select a single note
    public function getNote($slug) {
        return $this->asArray()
        ->where(['slug' => $slug])
        ->first();
    }
}