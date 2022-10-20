<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class Books extends Component
{
    public $books, $name_book, $code_book, $author, $publisher, $cover;
    public $isModal = 0;
    
    public function render()
    {
        $this->books = Book::orderBy('created_at', 'DESC')->get();
        return view('livewire.books');
    }

    public function create()
    {
        $this->resetFields();
        $this->openModal();
        $this->closeModal();
    }

    public function resetFields()
    {
        $this->name_book ='';
        $this->code_book ='';
        $this->author ='';
        $this->publisher ='';
        $this->cover ='';
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function closeModal()
    {
        $this->isModal = false;
    }
}
