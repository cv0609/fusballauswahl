@extends('front_end.layout.main')
@section('content')
<!--Leagues Pages Banner Section Start -->
<section class="pages-banner leagues-pages  bg-cover bg-no-repeat">
    <div class="container">
        <div class="banner-content">
            <ul class="leagues-ul">
                <li class="inline-list home-list">
                    <h3>
                        <a href="{{ route('home') }}">Startseite</a>
                    </h3>
                </li>
                <li class="inline-list next-page-list">
                    <h3>
                        Teamviewer
                    </h3>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Leagues Pages Banner Section End -->

<!-- Leagues Content Section Start -->
<section class="fusball_leagues team-view-page my-team-page">
    <div class="container">
        <div class="fusball_leagues-inner">
            <div class="back-btn">
                <a href="{{ route('matche-detail',['matcheId'=>$myTeam[0]['dbMatchId']]) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#000">
                        <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z"></path>
                    </svg>
                </a>
            </div>
            <h2>2024-25 Jahreszeit</h2>

            <div class="team-view-sec">
                <div class="team-view-header">
                    <h4>Wählen Sie Ihren Kapitän und Vizekapitän</h4>
                    <ul>
                        <li>
                            <span class="c-logo"> C </span>
                            <div class="c-details">
                                <h6>Der Kapitän bekommt</h6>
                                <p>2X (Doppelte Punkte)</p>
                            </div>
                        </li>
                        <li>
                            <span class="c-logo"> VC </span>
                            <div class="c-details">
                                <h6> Der Vizekapitän erhält</h6>
                                <p>1.5X (Doppelte Punkte)</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="fusball_leagues-inner-content">
                <div class="team-view-table">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">Spieler</th>
                                <th scope="col">Punkte</th>
                                <th scope="col">% C PAR</th>
                                <th scope="col">% VC PAR</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach($myTeam as $value)

                            <tr>
                                <td class="player-dp">
                                    <!-- <div class="player-dp-inner player-dp-inner1"></div> -->
                                    <img src="{{ $value['team_logo'] }}" alt="dp">

                                </td>
                                <td>
                                   <h6>{{ $value['player_name'] }}</h6>
                                   <!-- <span>41 Pt</span> -->
                                </td>
                                <td class="cap-vice">
                                    <span class="c-logo">C</span>
                                    <p class="team_captain" data-league_id = "{{ $value['league_id'] }}" data-match_id = "{{ $value['match_id'] }}" data-team_id = "{{ $value['team_id'] }}" data-player_id = "{{ $value['player_id'] }}" data-already_captain = "{{ $value['already_captain'] ?? '' }}">0.55%</p>
                                    <button class="plus player-toggle captain-plus" data-event="cap_plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                          </button>
                                          <button class="minus player-toggle d-none captain-minus" data-event="cap_minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                          </button>
                                </td>
                                <td class="cap-vice">
                                    <span class="c-logo">VC</span>
                                    <p class="team_captain team_vice_captain" data-league_id = "{{ $value['league_id'] }}" data-match_id = "{{ $value['match_id'] }}" data-team_id = "{{ $value['team_id'] }}" data-player_id = "{{ $value['player_id'] }}">0.37%</p>

                                    <button class="plus player-toggle vice-cap-plus" data-event="vice_plus">
                                          <i class="fa fa-plus" aria-hidden="true"></i>
                                       </button>
                                       <button class="minus player-toggle d-none vice-cap-minus" data-event="vice_minus">
                                          <i class="fa fa-minus" aria-hidden="true"></i>
                                       </button>
                                </td>
                            </tr>
                            @endforeach
                   
                        </tbody>
                    </table>
                </div>
                <div class="team-btns">
                    <a href="#" id="save-team-btn" class="next-btn">Speichern</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Leagues Content Section End -->

<!-- alert-msg popup start -->
<div class="alert-msg">
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <span>
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00c900"><path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q65 0 123 19t107 53l-58 59q-38-24-81-37.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160q133 0 226.5-93.5T800-480q0-18-2-36t-6-35l65-65q11 32 17 66t6 70q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-56-216L254-466l56-56 114 114 400-401 56 56-456 457Z"/></svg>
         </span>
            <h4 id="success-message"></h4>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ok</button>
        </div>
    </div>
    </div>
</div>
</div>
<!-- alert-msg popup end -->


<!-- alert-msg popup start -->
<div class="alert-msg">
   <div class="modal fade" id="capModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered">
       <div class="modal-content">
           <div class="modal-header">
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
            <span>
               <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#d30f0f"><path d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm-40-160h80v-240h-80v240Zm40 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
            </span>
               <h4 id="cap-message"></h4>
           </div>
           <div class="modal-footer">
           <button type="button" class="btn btn-secondary" id="cap-ok" data-bs-dismiss="modal">ok</button>
           </div>
       </div>
       </div>
   </div>
   </div>
   <!-- alert-msg popup end -->

   <!-- alert- login msg popup start -->
<div class="alert-msg">
   <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered">
       <div class="modal-content">
           <div class="modal-header">
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
            <span>
               <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#d30f0f"><path d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm-40-160h80v-240h-80v240Zm40 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
            </span>
               <h4 id="login-message"></h4>
           </div>
           <div class="modal-footer">
           <button type="button" id="login-click" class="btn btn-secondary" data-bs-dismiss="modal">Login</button>
           </div>
       </div>
       </div>
   </div>
   </div>
   <!-- alert-msg popup end -->

 </section>
@endsection


@section('custom-script')

<script>
   $(document).ready(function(){
     @if(Session::has('success'))
       var flashMessage = "<?= Session::get('success') ?>";
       $("#success-message").html(flashMessage)
       $("#successModal").modal('show');
     @endif

     var myTeam = @json($myTeam);

     $('.div-tbl tbody tr').each(function() {
        var row = $(this);

        // Retrieve data attributes from the row
        var leagueId = row.find('.team_captain').data('league_id');
        var matchId = row.find('.team_captain').data('match_id');
        var teamId = row.find('.team_captain').data('team_id');
        var playerId = row.find('.team_captain').data('player_id');

        // Check for captain status
        var isCaptain = myTeam.some(function(player) {
            return player.league_id == leagueId &&
                   player.match_id == matchId &&
                   player.team_id == teamId &&
                   player.player_id == playerId &&
                   player.is_captain == '1';
        });

        // Check for vice-captain status
        var isViceCaptain = myTeam.some(function(player) {
            return player.league_id == leagueId &&
                   player.match_id == matchId &&
                   player.team_id == teamId &&
                   player.player_id == playerId &&
                   player.is_vice_captain == '1';
        });

        // Show or hide buttons based on the player status
        if (isCaptain) {
            row.find('.team_captain .plus').addClass('d-none');
            row.find('.team_captain .minus').removeClass('d-none');
        } else {
            row.find('.team_captain .plus').removeClass('d-none');
            row.find('.team_captain .minus').addClass('d-none');
        }

        if (isViceCaptain) {
            row.find('.team_vice_captain .plus').addClass('d-none');
            row.find('.team_vice_captain .minus').removeClass('d-none');
        } else {
            row.find('.team_vice_captain .plus').removeClass('d-none');
            row.find('.team_vice_captain .minus').addClass('d-none');
        }
    });

     $('#login-click').on('click',function(){
        window.location.href = "{{ route('login') }}";
     })

     $('#save-team-btn').on('click', function(e) {
        e.preventDefault();

        $.ajax({
            url: "{{ route('auth.check') }}",
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            },
            success: function(data) {

             if(data.captain != true){
                  var flashMessage = "Please select a captain.";
                  $("#cap-message").html(flashMessage);
                  $("#capModal").modal('show');
                  return false;
             }else if(data.vice_captain != true){
                  var flashMessage = "Please select a vice captain.";
                  $("#cap-message").html(flashMessage);
                  $("#capModal").modal('show');
                  return false;
             }else if(data.error == false){
                  var flashMessage = "You need to log in before making a team.";
                  $("#login-message").html(flashMessage)
                  $("#loginModal").modal('show');
             }else{
               window.location.href = "{{ route('save-team') }}";
             }
            }
        });
    });

      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });

      $(document).on('click', '.player-toggle', function() {
         var button = $(this);
         var parent = button.closest('td');
         var league_id = parent.find('.team_captain').data('league_id');
         var match_id = parent.find('.team_captain').data('match_id');
         var team_id = parent.find('.team_captain').data('team_id');
         var player_id = parent.find('.team_captain').data('player_id');
          
         if (button.hasClass('captain-plus')) {
            var visibleMinusCount = $('.captain-minus').not('.d-none').length;

            if (visibleMinusCount >= 1) {
               var flashMessage = "Captain already selected.";
               $("#cap-message").html(flashMessage);
               $("#capModal").modal('show');
               return false;
            }
         }

         if (button.hasClass('vice-cap-plus')) {
            var visibleMinusCount = $('.vice-cap-minus').not('.d-none').length;

            if (visibleMinusCount >= 1) {
               var flashMessage = "Vice Captain already selected.";
               $("#cap-message").html(flashMessage);
               $("#capModal").modal('show');
               return false;
            }
         }

         var event = $(this).data('event');

         var formData = {
            event : event,
            league_id : league_id,
            match_id : match_id,
            team_id : team_id,
            player_id : player_id,
         };

         $.ajax({
            url: "{{ route('make.captain') }}",
            type: 'POST',
            data: formData,
            success: function(response) {

               if(event == 'cap_plus'){

                  button.addClass('d-none');
                  button.closest('td').find('.minus').removeClass('d-none');

               }else if(event == 'cap_minus'){

                  button.addClass('d-none');
                  button.closest('td').find('.plus').removeClass('d-none');

               }

               if(event == 'vice_plus'){

                button.addClass('d-none');
                button.closest('td').find('.minus').removeClass('d-none');

               }else if(event == 'vice_minus'){

                  button.addClass('d-none');
                  button.closest('td').find('.plus').removeClass('d-none');

               }
            },
            error: function(xhr, status, error) {
                  console.error('Error:', error);
            }
         });
      });

   });
</script>


@endsection