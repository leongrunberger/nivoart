 @extends('layout') 

 @section('title', 'Spieleübersicht')
 
 
 @section('content')      
 <div class="container">
 

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