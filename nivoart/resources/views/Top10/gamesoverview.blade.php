 @extends('layout') 

 @section('title', 'Spieleübersicht')
 
 
 @section('content')      
 <div class="container">
 <div>
        <div class="mx-auto pull-right">
            <div class="">
                <form action="{{ route('games.index') }}" method="GET" role="search">

                    <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" type="submit" title="Search Games">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search Games" id="term">
                        <a href="{{ route('games.index') }}" class=" mt-1">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

                            <div class="mt-5">
                              @if(session()->get('success'))
                              <div class="alert alert-success">
                                {{session()->get('success')}}
                            </div>
                              @endif

                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <table>
                                  <tr>
                                    <th>Spieltitel</th>
                                    
                                  </tr>
                                  @foreach($data as $game)
                                  <tr>  
                                  <td>{{$game->titel}}</td>
                                  <td><a href="{{ route('games.show', $game->id)}}" class="btn btn-primary">Spiel anzeigen</a>
                                  <td>
                                  <td><a href="{{ route('games.edit', $game->id)}}" class="btn btn-primary">Edit</a>
                                  <td>
                                    <form action="{{ route('games.destroy', $game->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">DELETE</button>
                                  </form>
                                </td>
                                    @endforeach
                                  </tr>
                                </table>    
                                

                                </div>
                            </div>
</div>
 @endsection                    