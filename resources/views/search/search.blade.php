@extends('templates/template')
@section('title', 'atEvent')
@section('content')

    <div class="container">
        <input type="text" class="form-controller" id="search" name="search">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Locality</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>




    <script type="text/javascript">
        $('#search').on('keyup', function() {
            $value = $(this).val();
            $.ajax({
                type: 'get',
                url: '{{ URL::to('search') }}',
                data: {
                    'search': $value
                },
                success: function(data) {
                    $('tbody').html(data);
                }
            });
        })

        $.ajaxSetup({
            headers: {
                'csrftoken': '{{ csrf_token() }}'
            }
        });
    </script>

@endsection
