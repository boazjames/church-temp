<div class="time dynamic">
    <div class="panel bg-white text-center">
        <div class="panel-heading white-color text-bold bg-blue-dark">Time</div>
        <h2 class="sub-heading">Next service starts in: </h2>
        <div class="set-time hidden">
        @foreach($times as $time)

            <div>{{$time->time}}</div>

            @endforeach
    </div>

        <div class="bg-blue inline clock-item"><div id="days" class="bg-white">0</div><div>Days</div> </div>
        <div class="bg-blue inline clock-item"><div id="hours" class="bg-white">00</div><div>Hours</div> </div>
        <div class="bg-blue inline clock-item"><div id="minutes" class="bg-white">00</div><div>Minutes</div> </div>
        <div class="bg-blue inline clock-item"><div id="seconds" class="bg-white">00</div><div>Seconds</div> </div>
    </div>
</div>
