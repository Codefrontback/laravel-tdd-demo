<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TasksTest extends TestCase
{
    use DatabaseMigrations;

    public function testGetArticles()
    {
        //Given we have task in the database
        $article = factory('App\Article')->create(['id' => 1]);
        echo $article;

        //When user visit the tasks page
        $response = $this->get('/article');

        //He should be able to read the task
        $response->assertSee($article->title);
    }
}