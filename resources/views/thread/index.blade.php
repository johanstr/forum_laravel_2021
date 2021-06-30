@extends('layouts.main')

@section('content')
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>User ID</th>
            </tr>
        </thead>
        <tbody id="thread-list">

        </tbody>
    </table>
@endsection

@section('scripts')
    <script>
        let thread_list = document.querySelector('#thread-list');

        window.onload = function()
        {
            getAllThreads();
        }

        async function getAllThreads()
        {
            await fetch('http://forum-api.test/api/threads')
                .then(response => response.json())
                .then(data => {
                    showThreads(data);
                })
                .catch(error => console.log(error));
        }

        function showThreads(data)
        {
            data.forEach(thread => {
                thread_list.innerHTML += `
                <tr>
                    <td>${thread.id}</td>
                    <td>${thread.title}</td>
                    <td>${thread.description}</td>
                    <td>${thread.user_id}</td>
                </tr>
                `
            })
        }
    </script>
@endsection
