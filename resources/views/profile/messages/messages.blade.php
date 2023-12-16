<x-app-layout>
    <div class="flex flex-row gap-6 mt-10">
        <div class="w-2/3 pr-5 lg:border-r-4 border-gray-600 dark:border-gray-300">
            @foreach ($messages as $message)
            <div>
                {{ $message->fromUser->username }} 
                {{ $message->content }}
                @php
                    $dateString = $message->created_at;
                    $date = new DateTime($dateString);
                    $now = new DateTime();
                    $interval = $now->diff($date);
                    if (LaravelLocalization::getCurrentLocale() == 'en') {
                        if ($interval->y > 0) {
                            echo $interval->y . ' years ago';
                        } elseif ($interval->m > 0) {
                            echo $interval->m . ' months ago';
                        } elseif ($interval->d > 0) {
                            echo $interval->d . ' days ago';
                        } elseif ($interval->h > 0) {
                            echo $interval->h . ' hours ago';
                        } elseif ($interval->i > 0) {
                            echo $interval->i . ' minutes ago';
                        } elseif ($interval->s > 0) {
                            echo $interval->s . ' seconds ago';
                        }
                    } else {
                        if ($interval->y > 0) {
                            echo $interval->y . ' ans';
                        } elseif ($interval->m > 0) {
                            echo $interval->m . ' mois';
                        } elseif ($interval->d > 0) {
                            echo $interval->d . ' jours';
                        } elseif ($interval->h > 0) {
                            echo $interval->h . ' heures';
                        } elseif ($interval->i > 0) {
                            echo $interval->i . ' minutes';
                        } elseif ($interval->s > 0) {
                            echo $interval->s . ' secondes';
                        }
                    }
                @endphp
            </div>
            @endforeach
        </div>
        <div class="w-1/3 bg-green-500 h-screen md:flex md:flex-col md:gap-4">
            @include('layouts.weather-card')
            @include('layouts.hashtag-card')
            @include('layouts.currency-card')
        </div>
    </div>
</x-app-layout>