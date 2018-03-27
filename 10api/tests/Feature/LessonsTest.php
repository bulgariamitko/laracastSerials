<?php

namespace Tests\Feature;

use App\Lesson;

class LessonsTest extends ApiTester
{
    /** @test **/
    // public function it_fetches_lessons()
    // {
    //     // arrange
    //     $this->times(5)->makeLesson();

    //     // act
    //     $response = $this->json('GET', 'api/v1/lessons');

    //     // assert
    //     $response->assertStatus(200)->assertJson([
    //         'data' => [
    //             'title' => true,
    //             'body' => true,
    //             'active' => true,
    //         ]
    //     ]);
    // }

    /** @test **/
    public function it_fetches_a_single_lesson()
    {
        // arrange
        $this->makeLesson();

        // act
        $response = $this->json('GET', 'api/v1/lessons/1');

        // assert
        $response->assertStatus(200)->assertJson([
            'data' => [
                'title' => true,
                'body' => true,
                'active' => true,
            ]
        ]);
    }

    private function makeLesson($lessonFields = [])
    {
        $lesson = array_merge([
            'title' => $this->fake->sentence,
            'body' => $this->fake->paragraph,
            'some_book' => $this->fake->boolean,
        ], $lessonFields);

        while($this->times--) Lesson::create($lesson);
    }
}