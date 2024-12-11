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
                        Ligen
                    </h3>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Leagues Pages Banner Section End -->

<!-- Leagues Content Section Start -->
<section class="fusball_leagues leagues">
    <div class="container">
        <div class="fusball_leagues-inner">

            <h2>{{ date('Y') }} Jahreszeit </h2>

            <div class="team-view-sec">

            </div>
            <div class="fusball_leagues-inner-content">
                <div class="leagues-table">
                    <table id="myTable">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Liga</th>
                                <th scope="col">Typ</th>
                                <th scope="col">Startdatum</th>
                                <th scope="col">Enddatum</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($leagues as $key => $league)
                {{-- @php
                  $check_match = checkMatch($league['league']['id']);
                  dump($check_match);
                @endphp --}}
                  {{-- @if($check_match == true) --}}
                            <tr>
                                <td class="league-logo">
                                    <!-- <div class="league-logo-inner  league-logo-inner1"></div> -->
                        <img class="lazy-load" data-src="{{ $league->logo }}" alt="league-logo">

                                    <a href="{{ route('leagueMatches',['leagueId'=>$league->id]) }}"></a>
                                </td>
                                <td>
                                    <h6>
                                    {{ $league->name }}
                                    </h6>
                                </td>
                                <td>
                                    <p>{{ $league->type }}</p>
                                </td>
                                <td>
                                    <p>{{ $league->start_date }}</p>
                                </td>
                                <td>
                                    <p>{{ $league->end_date }}</p>
                                </td>
                            </tr>
                            {{-- @endif --}}
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
  let table = new DataTable('#myTable');

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