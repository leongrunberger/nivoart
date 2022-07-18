 @extends('layout') 

 @section('title', 'Spieleübersicht')
 
 
 @section('content')      
 

                            <div class="ml-12">
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
                                  
                                    @endforeach
                                  </tr>
                                </table>    
                                

                                </div>
                            </div>
 @endsection                    