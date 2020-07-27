<?php namespace App\Models;
use CodeIgniter\Model;

$db      = \Config\Database::connect();
$builder = $db->table('notes');

class NoteModel extends Model {
    protected $table      = 'notes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'slug', 'body', 'dateTime'];

    public function getAllNotes() {
        return $this->findAll();
    }

    public function getNote($slug) {
        return $this->asArray()
        ->where(['slug' => $slug])
        ->first();
    }
}