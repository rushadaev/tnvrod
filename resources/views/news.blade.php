@extends('layouts.main')
@section('title', 'Республиканское общественное движение &quot;Татарстан - новый век&quot; - Новости')
@section('content')
    <div class="container max-w-[1250px] mt-8 mx-auto px-4 flex flex-col justify-between">
        <div class="h-[18px] justify-start items-center gap-[15px] inline-flex">
            <div class="text-justify text-neutral-600 text-[14px] font-normal">Республиканское общественное движение - «Татарстан — новый век» — «Татарстан —  яңа гасыр»</div>
            <div class="origin-top-left w-2.5 h-[10px] relative">
                <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="1.46967" y1="9.46967" x2="6.46967" y2="4.46967" stroke="#4B4A4C" stroke-width="1.5"/>
                    <line x1="6.46967" y1="5.53033" x2="1.46967" y2="0.53033" stroke="#4B4A4C" stroke-width="1.5"/>
                </svg>
            </div>
            <div class="opacity-60 text-justify text-neutral-600 text-[14px] font-normal">Новости</div>
        </div>
    </div>

    <div class="container max-w-[1250px]  mx-auto px-4 flex flex-col justify-between h-full mt-10">
        <div class="relative grid grid-flow-row md:grid-flow-col">
            <div class="block">
                <div class="text-justify text-zinc-700 text-[35px] font-black uppercase tracking-widest mb-5">НОВОСТИ</div>
                <div class="left-[2px] top-[68px]">
                    @foreach($articles as $article)
                    <div class="border-t border-b py-4 border-black">
                        <div class="grid grid-flow-col justify-start items-center gap-2">
                            <div class="text-justify text-zinc-700 text-[30px] font-medium uppercase tracking-wider">{{Carbon\Carbon::make($article->created)->day}}</div>
                            <div class="text-justify text-zinc-700 text-[16px] font-normal tracking-wider">/ {{Carbon\Carbon::make($article->created)->month}} {{Carbon\Carbon::make($article->created)->year}} г.</div>
                        </div>
                        <a href="/articles/{{$article->id}}" class="text-zinc-700 text-[22px] font-semibold leading-snug mb-5">{{$article->title}}</a>
                        <div class="text-zinc-700 text-[16px] font-normal leading-snug">{!! CustomHelper::shortenString($article->fulltext) !!}</div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="block ml-[40px]">
                <div class="text-zinc-700 text-[16px] font-medium uppercase leading-snug">Календарь событий</div>
                <div class="calendar"></div>
            </div>
        </div>
        <div class="w-full flex cursor-pointer justify-center md:justify-end">
            <div class="w-full mt-5 max-w-[425px] h-[75px] relative">
                <div class="w-full h-[75px] left-[0] top-[0] relative bg-blue-500 rounded"></div>
                <div class="w-full absolute top-0 left-0 h-full flex justify-center items-center text-center text-white text-[18px] font-bold uppercase">следующая страница</div>
                <div class="origin-top-left w-[18.37px] h-[10px] right-[30px] top-[28px] absolute">
                    <svg width="12" height="19" viewBox="0 0 12 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line y1="-1" x2="13.5771" y2="-1" transform="matrix(0.736474 -0.676465 0.736474 0.676465 2 19)" stroke="white" stroke-width="2"/>
                        <line y1="-1" x2="13.5771" y2="-1" transform="matrix(-0.736474 -0.676465 0.736474 -0.676465 12 9.81543)" stroke="white" stroke-width="2"/>
                    </svg>

                </div>
            </div>
        </div>
    </div>
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
                    window.location.href = `/news?day=${e.target.textContent}&month=${calendar.getMonth()+1}&year=${calendar.getFullYear()}`;
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
                    // Get the current URL
                    const url = new URL(window.location.href);

                    // Get the query parameters
                    const params = new URLSearchParams(url.search);


                    if (
                        currentYear === changedYear &&
                        currentMonth === changedMonth &&
                        document.querySelectorAll(".number-item")
                    ) {

                        let newDay = params.get('day');
                        if(newDay){
                            document
                                .querySelectorAll(".number-item")
                                [newDay - 1].classList.add("calendar-today");
                        }
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
