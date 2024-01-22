<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:6|max:100',
            'description' => 'nullable',
            'thumb' => 'required|url',
            'price' => 'required|max:20',
            'series' => 'required|max:100',
            'sale_date' => 'required|date',
            'type' => 'required',
        ];

    }

    public function messages()
    {
        return [
            'title.required' => 'Inserisci un titolo',
            'title.min' => 'Il titolo deve essere di almeno 6 caratteri',
            'title.max' => 'Il titolo non può superare i 100 caratteri',
            'thumb.required' => 'Inserisci l\'url di un\'immagine',
            'thumb.url' => 'L\'url dell\'immagine non è valido',
            'price.required' => 'Inserisci un prezzo',
            'price.max' => 'Il prezzo non può superare i 20 caratteri',
            'series.required' => 'Inserisci una serie',
            'series.max' => 'La serie non può superare i 100 caratteri',
            'sale_date.required' => 'Inserisci una data',
            'sale_date.date' => 'Data inserita non valida',
            'type.required' => 'Inserisci una tipologia',
        ];
    }
}
