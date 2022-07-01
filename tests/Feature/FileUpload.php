<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class FileUpload extends TestCase
{

    /**
     * @test
     */
    public function does_the_route_for_file_uploading_exists(){
        $this->withoutExceptionHandling();
        $route = 'file_upload';
        $this->assertTrue(Route::has($route));
    }

    /**
     * @test
     */
    public function it_uploads_file_successfully(){
    $this->withoutExceptionHandling();

        $params = [];

        $response = $this->post('fileUpload', $params)->getContent();
        
        dd($response);



    }

}
