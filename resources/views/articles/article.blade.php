@extends('layouts.main')
@section('title', 'Республиканское общественное движение &quot;Татарстан - новый век&quot; - '.$article->title)
@section('content')
    <div class="container max-w-[1250px] mt-8 mx-auto px-4 flex flex-col justify-between ">
        <div class="grid grid-flow-row xl:grid-flow-col justify-start items-start gap-[15px]">
            <div class="grid grid-flow-col justify-start items-center gap-4 h-full">
                <a href="/" class="text-left text-neutral-600 text-[14px] font-normal">Республиканское общественное движение - «Татарстан — новый век» — «Татарстан —  яңа гасыр»</a>
                <div class="origin-top-left w-2.5 h-[10px] relative">
                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="1.46967" y1="9.46967" x2="6.46967" y2="4.46967" stroke="#4B4A4C" stroke-width="1.5"/>
                        <line x1="6.46967" y1="5.53033" x2="1.46967" y2="0.53033" stroke="#4B4A4C" stroke-width="1.5"/>
                    </svg>
                </div>
            </div>
            <div class="grid grid-flow-col justify-start items-center gap-4 h-full">
                <a href="/content/{{$article->category->alias}}" class="text-left text-neutral-600 text-[14px] font-normal">{{$article->category->title}}</a>
                <div class="origin-top-left w-2.5 h-[10px] relative">
                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="1.46967" y1="9.46967" x2="6.46967" y2="4.46967" stroke="#4B4A4C" stroke-width="1.5"/>
                        <line x1="6.46967" y1="5.53033" x2="1.46967" y2="0.53033" stroke="#4B4A4C" stroke-width="1.5"/>
                    </svg>
                </div>
            </div>
            <div class="opacity-60 text-left text-neutral-600 text-[14px] font-normal">
                {{$article->title}}
            </div>
        </div>
    </div>

    <div class="container max-w-[1250px] mt-10 mx-auto px-4 flex flex-col justify-between h-full">
        <div class="relative grid grid-flow-col">
            <div class="block">
                <div class="text-zinc-700 text-[35px] font-black uppercase mb-10">{{$article->title}}</div>
                <div class="max-w-[809px] relative">
                    @php
                        $dom = new DOMDocument();
                        $dom->loadHTML($article->introtext);
                        $imgsrc = null;
                        $images = $dom->getElementsByTagName('img');
                        if ($images->length > 0) {
                            $firstImage = $images->item(0);
                            $src = $firstImage->getAttribute('src');
                            $imgsrc = $src;
                        }
                    @endphp
                    <div class="max-w-[805px] relative text-justify text-gray-700 text-[16px] font-normal leading-normal">
                        @if($imgsrc)
                        <div class="w-full mb-10">
                            <img class="object-cover max-h-[570px]" src="{{$imgsrc}}" />
                        </div>
                        @endif
                        {!! CustomHelper::shortenString($article->introtext) !!}
                        {!! $article->fulltext !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(count($article->category->articles->except(['id', $article->id])->sortByDesc('created')->take(4)))
    <x-lastnews :news="$article->category->articles->except(['id', $article->id])->sortByDesc('created')->take(4)"></x-lastnews>
    @endif
    <x-photogallery></x-photogallery>
    <script>
        //check the console for date click event
        //Fixed day highlight
        //Added previous month and next month view

        function CalendarControl() {
            const calendar = new Date();
            const calendarControl = {
                localDate: new Date(),
                prevMonthLastDate: null,
                calWeekDays: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
                calMonthName: [
                    "Янв",
                    "Фев",
                    "Мар",
                    "Апр",
                    "Май",
                    "Июнь",
                    "Июль",
                    "Авг",
                    "Сен",
                    "Окт",
                    "Нов",
                    "Дек"
                ],
                daysInMonth: function (month, year) {
                    return new Date(year, month, 0).getDate();
                },
                firstDay: function () {
                    return new Date(calendar.getFullYear(), calendar.getMonth(), 1);
                },
                lastDay: function () {
                    return new Date(calendar.getFullYear(), calendar.getMonth() + 1, 0);
                },
                firstDayNumber: function () {
                    return calendarControl.firstDay().getDay() + 1;
                },
                lastDayNumber: function () {
                    return calendarControl.lastDay().getDay() + 1;
                },
                getPreviousMonthLastDate: function () {
                    let lastDate = new Date(
                        calendar.getFullYear(),
                        calendar.getMonth(),
                        0
                    ).getDate();
                    return lastDate;
                },
                navigateToPreviousMonth: function () {
                    calendar.setMonth(calendar.getMonth() - 1);
                    calendarControl.attachEventsOnNextPrev();
                },
                navigateToNextMonth: function () {
                    calendar.setMonth(calendar.getMonth() + 1);
                    calendarControl.attachEventsOnNextPrev();
                },
                navigateToCurrentMonth: function () {
                    let currentMonth = calendarControl.localDate.getMonth();
                    let currentYear = calendarControl.localDate.getFullYear();
                    calendar.setMonth(currentMonth);
                    calendar.setYear(currentYear);
                    calendarControl.attachEventsOnNextPrev();
                },
                displayYear: function () {
                    let yearLabel = document.querySelector(".calendar .calendar-year-label");
                    yearLabel.innerHTML = calendar.getFullYear();
                },
                displayMonth: function () {
                    let monthLabel = document.querySelector(
                        ".calendar .calendar-month-label"
                    );
                    monthLabel.innerHTML = calendarControl.calMonthName[calendar.getMonth()];
                },
                selectDate: function (e) {
                    console.log(
                        `${e.target.textContent} ${
                            calendarControl.calMonthName[calendar.getMonth()]
                        } ${calendar.getFullYear()}`
                    );
                },
                plotSelectors: function () {
                    document.querySelector(
                        ".calendar"
                    ).innerHTML += `<div class="calendar-inner"><div class="calendar-controls">
          <div class="calendar-prev"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M88.2 3.8L35.8 56.23 28 64l7.8 7.78 52.4 52.4 9.78-7.76L45.58 64l52.4-52.4z"/></svg></a></div>
          <div class="calendar-year-month">
          <div class="calendar-month-label"></div>
          <div>-</div>
          <div class="calendar-year-label"></div>
          </div>
          <div class="calendar-next"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M38.8 124.2l52.4-52.42L99 64l-7.77-7.78-52.4-52.4-9.8 7.77L81.44 64 29 116.42z"/></svg></a></div>
          </div>
          <div class="calendar-today-date">Сегодня:
            ${calendarControl.calWeekDays[calendarControl.localDate.getDay()]},
            ${calendarControl.localDate.getDate()},
            ${calendarControl.calMonthName[calendarControl.localDate.getMonth()]}
            ${calendarControl.localDate.getFullYear()}
          </div>
          <div class="calendar-body"></div></div>`;
                },
                plotDayNames: function () {
                    for (let i = 0; i < calendarControl.calWeekDays.length; i++) {
                        document.querySelector(
                            ".calendar .calendar-body"
                        ).innerHTML += `<div>${calendarControl.calWeekDays[i]}</div>`;
                    }
                },
                plotDates: function () {
                    document.querySelector(".calendar .calendar-body").innerHTML = "";
                    calendarControl.plotDayNames();
                    calendarControl.displayMonth();
                    calendarControl.displayYear();
                    let count = 1;
                    let prevDateCount = 0;

                    calendarControl.prevMonthLastDate = calendarControl.getPreviousMonthLastDate();
                    let prevMonthDatesArray = [];
                    let calendarDays = calendarControl.daysInMonth(
                        calendar.getMonth() + 1,
                        calendar.getFullYear()
                    );
                    // dates of current month
                    for (let i = 1; i < calendarDays; i++) {
                        if (i < calendarControl.firstDayNumber()) {
                            prevDateCount += 1;
                            document.querySelector(
                                ".calendar .calendar-body"
                            ).innerHTML += `<div class="prev-dates"></div>`;
                            prevMonthDatesArray.push(calendarControl.prevMonthLastDate--);
                        } else {
                            document.querySelector(
                                ".calendar .calendar-body"
                            ).innerHTML += `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
                        }
                    }
                    //remaining dates after month dates
                    for (let j = 0; j < prevDateCount + 1; j++) {
                        document.querySelector(
                            ".calendar .calendar-body"
                        ).innerHTML += `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
                    }
                    calendarControl.highlightToday();
                    calendarControl.plotPrevMonthDates(prevMonthDatesArray);
                    calendarControl.plotNextMonthDates();
                },
                attachEvents: function () {
                    let prevBtn = document.querySelector(".calendar .calendar-prev a");
                    let nextBtn = document.querySelector(".calendar .calendar-next a");
                    let todayDate = document.querySelector(".calendar .calendar-today-date");
                    let dateNumber = document.querySelectorAll(".calendar .dateNumber");
                    prevBtn.addEventListener(
                        "click",
                        calendarControl.navigateToPreviousMonth
                    );
                    nextBtn.addEventListener("click", calendarControl.navigateToNextMonth);
                    todayDate.addEventListener(
                        "click",
                        calendarControl.navigateToCurrentMonth
                    );
                    for (var i = 0; i < dateNumber.length; i++) {
                        dateNumber[i].addEventListener(
                            "click",
                            calendarControl.selectDate,
                            false
                        );
                    }
                },
                highlightToday: function () {
                    let currentMonth = calendarControl.localDate.getMonth() + 1;
                    let changedMonth = calendar.getMonth() + 1;
                    let currentYear = calendarControl.localDate.getFullYear();
                    let changedYear = calendar.getFullYear();
                    if (
                        currentYear === changedYear &&
                        currentMonth === changedMonth &&
                        document.querySelectorAll(".number-item")
                    ) {
                        document
                            .querySelectorAll(".number-item")
                            [calendar.getDate() - 1].classList.add("calendar-today");

                    }
                },
                plotPrevMonthDates: function(dates){
                    dates.reverse();
                    for(let i=0;i<dates.length;i++) {
                        if(document.querySelectorAll(".prev-dates")) {
                            document.querySelectorAll(".prev-dates")[i].textContent = dates[i];
                        }
                    }
                },
                plotNextMonthDates: function(){
                    let childElemCount = document.querySelector('.calendar-body').childElementCount;
                    //7 lines
                    if(childElemCount > 42 ) {
                        let diff = 49 - childElemCount;
                        calendarControl.loopThroughNextDays(diff);
                    }

                    //6 lines
                    if(childElemCount > 35 && childElemCount <= 42 ) {
                        let diff = 42 - childElemCount;
                        calendarControl.loopThroughNextDays(42 - childElemCount);
                    }

                },
                loopThroughNextDays: function(count) {
                    if(count > 0) {
                        for(let i=1;i<=count;i++) {
                            document.querySelector('.calendar-body').innerHTML += `<div class="next-dates">${i}</div>`;
                        }
                    }
                },
                attachEventsOnNextPrev: function () {
                    calendarControl.plotDates();
                    calendarControl.attachEvents();
                },
                init: function () {
                    calendarControl.plotSelectors();
                    calendarControl.plotDates();
                    calendarControl.attachEvents();
                }
            };
            calendarControl.init();
        }

        const calendarControl = new CalendarControl();
    </script>
@endsection
