<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublishPostForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'body' => 'required',
        ];
    }

    public function persist()
    {
        // add any logic - one way
        // $post = Post::create($this->all());
        // $post->addSubscriber();

        // other way
        // $post = new \App\Post;
        // $post->body = $this->body;

        echo "<pre>";
        print_r($this->all());
        echo "</pre>";
    }
}
