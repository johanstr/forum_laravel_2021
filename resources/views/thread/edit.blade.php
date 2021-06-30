@extends('layouts.main')

@section('content')
    <form id="thread-create-form">
        @csrf
        <input type="hidden" name="user_id" value="1" />
        <input type="text" name="title" placeholder="Titel van de thread" autofocus /><br /><br />
        <textarea name="description" placeholder="Content van de thread"></textarea><br /><br />
        <input type="submit" value="Opslaan" />
    </form>
@endsection

@section('scripts')
    <script>
        let form = document.querySelector('#thread-create-form')

        window.onload = function()
        {
            // Eventhandler toevoegen aan de form
            form.addEventListener('submit', handleForm)
        }

        async function handleForm(event)
        {
            event.preventDefault();
            let formData = new FormData();
            formData.append('_token', document.querySelector('input[name=_token]').value );
            formData.append('user_id', '1');
            formData.append('title', document.querySelector('input[name=title]').value );
            formData.append('description', document.querySelector('textarea[name=description]').value );

            console.log(formData.get('title'));
            await fetch('http://forum-api.test/api/thread/create',
                {
                    method: 'POST',
                    body: formData
                    /*
                     Onderstaande header informatie uitgeschakeld.
                     Het is niet nodig en er zou nog een boundary aan toegevoegd moeten worden
                     Zonder deze header werkt het feilloos

                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                     */

                }
            )
                .then(response => response.json())
                .then(data => console.log('DATA', data))
                .catch(error => console.log('ERROR', error))
        }
    </script>
@endsection
