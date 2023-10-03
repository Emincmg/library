<?php

namespace Tests\Feature;

use App\Models\Book;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BooksTest extends TestCase
{
    use RefreshDatabase;

    private Authenticatable $user;

    protected function setUp() : void
    {
        $this->user = User::factory()->create();
    }


    /**
     * Test if unauthorised url requests redirects to login.
     *
     * @return void
     */
    public function test_redirects_to_login_if_unauthorised(): void
    {
        $response = $this->get('/');
        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }

    /**
     * Test the change read field functionality
     *
     * @return void
     */
    public function test_change_read_field_function(): void
    {
        $val = 0;
        $book = Book::factory()->create(['user_id'=>$this->user->id]);
        $this->actingAs($this->user)->get('/changeread/'.$book->id.'/'.$val);
        $this->assertTrue(true,$book->readBefore==$val);
    }

    public function test_change_note_field_function(): void
    {
        $val = 4.5;
        $book = Book::factory()->create(['user_id'=>$this->user->id]);
        $this->actingAs($this->user)->get('/changenote'.$book->id.'/'.$val);
        $this->assertTrue(true,$book->rating==$val);
    }
}
