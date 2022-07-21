 @extends('layout') 

 @section('title', 'Spieleübersicht')
 
 
 @section('content')      
 
 <div class="container-fluid">

                            <div class="mt-5">
                              @if(session()->get('success'))
                              <div class="alert alert-success">
                                {{session()->get('success')}}
                            </div>
                              @endif

                            <div class="ml-8">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    DPimmel dient als Spielwiese. Hier möchte ich meinen selbst produzierten Videos uploaden und Geld verdienen. Spaßi. Eigentlich nur im programmieren fit bleiben.
                                </div>
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