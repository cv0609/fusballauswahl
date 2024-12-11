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
                    {{ $matches[0]->name.' '.$matches[0]->year }}
                    </h3>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Leagues Pages Banner Section End -->

<!-- Leagues Content Section Start -->
<section class="fusball_leagues my-matches">
    <div class="container">


        <div class="fusball_leagues-inner">
            <h2>Meine Übereinstimmungen</h2>
            <!-- Content -->
            <div class="fusball_leagues my-matches-inner-content">
                <div class="matches-table ">
                    <table id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">Team</th>
                                <th scope="col">Spielinformationen</th>
                                <th scope="col">Team</th>
                                <th scope="col">Punktzahl </th>
                                <th scope="col">Status</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($matches as $key => $matche)
                            @php
                            $startSoonMatch = getMatchStatus($matche->fixture_date);
                            @endphp 
                            <tr class="matche-main" data-fixture-id="{{ $matche->id}}"
                                data-league-id="{{$matches[0]->league->league_id}}"
                                data-home-team="{{ $matche->home_team_id }}"
                                data-away-team="{{ $matche->away_team_id }}">
                                <td class="match-team-logo">
                                    <!-- <a href="match-details"> -->
                                        <!-- <div class="my-match-team-logo-inner my-match-team-logo-inner1"></div> -->
                                    <img class="lazy-load" data-src="{{ $matche->home_team_logo }}" alt="team-logo">

                                        <h6>{{ $matche->home_team_name }}</h6>
                                    <!-- </a> -->
                                </td>
                                <td>
                                <h6>{{$matche->venue_name}}</h6>
                                <p>{{$matche->venue_city}}</p>
                                <span>{{ date('Y-m-d h:i a',strtotime($matche->fixture_date))}}</span>
                                </td>
                                <td class="match-team-logo">

                                    <!-- <div class="my-match-team-logo-inner my-match-team-logo-inner2"></div> -->
                                    <img class="lazy-load" data-src="{{ $matche->away_team_logo }}" alt="team-logo">
                                    <h6>{{ $matche->away_team_name }}</h6>
                                </td>
                                <td class="match-score">
                                    <h4>0</h4>
                                </td>
                                <td class="match-status">
                                @if($matche->short_status == 'LIVE' || $matche->short_status == '1H' ||
                                    $matche->short_status == 'HT' || $matche->short_status == '2H' ||
                                    $matche->short_status == 'ET' || $matche->short_status == 'BT' ||
                                    $matche->short_status == 'P' || $matche->short_status == 'SUSP' ||
                                    $matche->short_status == 'INT' || $matche->short_status == 'INT')
                               
                                    <p class="win">LIVE ({{ $matche->long_status }})</p>

                               
                                @elseif((isset($startSoonMatch) && !empty($startSoonMatch) && $startSoonMatch <= 40)
                                || ( $startSoonMatch=='0' ))
                            
                                    <p class="win">Start In {{ $startSoonMatch.' mints' }}</p>

                                
                                @endif
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- Leagues Content Section End -->
@endsection
@section('custom-script')
<script>
 $(".matche-main").on('click', function() {
   //  var homeTeam = $(this).data('home-team'); // Assuming teams is an array
   //  var awayTeam = $(this).data('away-team'); // Assuming teams is an array
   //  var leagueId = $(this).data('league-id'); // Assuming teams is an array
    var matcheId = $(this).data('fixture-id'); // Assuming teams is an array

    var url = "{{ route('matche-detail', [':matcheId']) }}";
    url = url.replace(':matcheId', matcheId);

    window.location.href = url;
});

//  $(".matche-main-not-start").on('click',function(){
//     $("#error-message").html("Lineups are available between 20 and 40 minutes before the match start");
//     $("#errorModal2").modal('show');
//  })

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    let table = new DataTable('#myTable');
</script>

<script>

   document.addEventListener("DOMContentLoaded", function() {
      lazyLoading();
   });

   $(document).ready(function() {

      $(document).on('click', '.dt-paging-button', function() {
         lazyLoading();
      });

      $('.dt-input').on('keyup change', function () {
         lazyLoading();
      });

   });

  function lazyLoading(){
  
   let lazyImages = [].slice.call(document.querySelectorAll("img.lazy-load"));

   if ("IntersectionObserver" in window) {
      let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
         entries.forEach(function(entry) {
               if (entry.isIntersecting) {
                  let lazyImage = entry.target;
                  lazyImage.src = lazyImage.dataset.src;
                  lazyImage.classList.remove("lazy-load");
                  lazyImageObserver.unobserve(lazyImage);
               }
         });
      });

      lazyImages.forEach(function(lazyImage) {
         lazyImageObserver.observe(lazyImage);
      });
   } else {
      // Fallback for older browsers
      lazyImages.forEach(function(lazyImage) {
         lazyImage.src = lazyImage.dataset.src;
      });
   }
  }

</script>

@endsection