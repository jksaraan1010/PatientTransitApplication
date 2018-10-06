<!DOCTYPE html>
<html>
    <head>
        <title>Survey</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ URL::to('survey123') }}">Take Survey</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('Survey123') }}">View All Questions</a></li>
                <li><a href="{{ URL::to('Survey123/create') }}"></a>
            </ul>
        </nav>

        <h1>Questions</h1>

        <!-- will be used to show any messages -->
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>Question</td>
                    <td>Yes</td>
                    <td>No</td>
                </tr>
            </thead>
            <tbody>
            <form action="{{route('survey123Store')}}" method = "post">


            @foreach($questionsForSurvey as $questionsRecord)
                <tr>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <td><label for="userAnswerForQuestion{{$questionsRecord->id}}">{{ $questionsRecord->question }}</label></td>
                    <td><input type = "radio" name = "userAnswerForQuestion{{$questionsRecord->id}}" value = "1"/> Yes</td>
                    <td><input type = "radio" name = "userAnswerForQuestion{{$questionsRecord->id}}" value = "0"/> No </td>
                      <td hidden>  <label for="sectionId">SectionId</label>
                        <input name="sectionId" value="{{$questionsRecord->sectionId}}"></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <input type="submit" class='btn btn-danger' value='Submit This Section'>
        </form>
        </div>
    </body>
</html>
