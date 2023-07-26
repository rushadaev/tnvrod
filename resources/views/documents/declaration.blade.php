@extends('layouts.main')
@section('title', 'Республиканское общественное движение &quot;Татарстан - новый век&quot; - Текст Декларации «Хартия Земли»')
@section('content')
    <div class="container max-w-[1250px] mt-8 mx-auto px-4 flex flex-col justify-between ">
        <div class="grid grid-flow-row xl:grid-flow-col justify-start items-start gap-[15px]">
            <div class="grid grid-flow-col justify-start items-center gap-4">
                <a href="/" class="text-left text-neutral-600 text-[14px] font-normal">Республиканское общественное движение - «Татарстан — новый век» — «Татарстан —  яңа гасыр»</a>
                <div class="origin-top-left w-2.5 h-[10px] relative">
                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="1.46967" y1="9.46967" x2="6.46967" y2="4.46967" stroke="#4B4A4C" stroke-width="1.5"/>
                        <line x1="6.46967" y1="5.53033" x2="1.46967" y2="0.53033" stroke="#4B4A4C" stroke-width="1.5"/>
                    </svg>
                </div>
            </div>
            <div class="grid grid-flow-col justify-start items-center gap-4">
                <a href="/documents" class="opacity-60 text-left text-neutral-600 text-[14px] font-normal">Текст Декларации «Хартия Земли»</a>
            </div>
        </div>
    </div>

    <div class="container max-w-[1250px] mt-8 mx-auto px-4 grid grid-flow-row gap-10">
        <div class="text-zinc-700 text-xl md:text-3xl font-black uppercase">Текст Декларации «Хартия Земли»</div>
        @php
        $files = collect([
            [
                'type' => 'custom',
                'icon' => 'PDF',
                'title' => 'Текст Декларации «Хартия Земли»',
                'url' => 'PDF, 34.0 Кб',
                'order' => 1,
                'widget_id' => 1,
            ],
        ]);
        @endphp
        <div class="text-justify">
            <x-files :files="collect($files)"></x-files>

            <div class="max-w-[805px]">
                <span class="text-gray-700 text-[18px] font-bold leading-normal">
                Март 2000 г.<br/>
                </span>
                <br/>
                <span class="text-gray-700 text-[18px] leading-relaxed">
                    <span class="text-gray-700 text-[18px] font-bold leading-normal">Преамбула.</span><br/>
                    Мы находимся на критическом этапе в истории Земли, когда человечество должно избрать свое будущее. Так как мир становится все более и более взаимозависимым и хрупким, будущее сулит одновременно и большую опасность, и большие перспективы. Чтобы двигаться вперед, мы должны осознать, что при всем великолепии разнообразия культур и образа жизни мы - единая человеческая семья и сообщество единой Земли с общей судьбой. Мы должны объединиться, чтобы создать устойчивое глобальное сообщество, основанное на уважении природы, всеобщих прав человека, экономической справедливости и культуре мира. В этом стремлении особенно важно то, что мы, люди Земли, провозглашаем нашу ответственность друг перед другом, перед великим сообществом живого, и перед будущими поколениями.
                    <br/><br/>
                    <span class="text-gray-700 text-[18px] font-bold leading-normal">Земля, наш дом</span><br/>
                Человечество является частью обширной эволюционирующей вселенной. Земля, наш дом, живая и несет на себе уникальную общность жизни. Силы природы делают существование рискованным и ненадежным, однако Земля обеспечивает естественные условия, необходимые для эволюции жизни. Устойчивость живого сообщества и благополучие человечества зависят от сохранения здоровой биосферы со всеми ее экосистемами, богатым разнообразием растений и животных, плодородной почвой, чистой водой и чистым воздухом. Глобальная окружающая среда с ее ограниченными ресурсами является общей заботой всех людей. Охрана жизнеспособности, разнообразия и красоты Земли являются священным долгом.
                    <br/><br/>
                    <span class="text-gray-700 text-[18px] font-bold leading-normal">Глобальная ситуация</span><br/>
                Доминируюшие модели производства и потребления вызывают опустошение окружающей среды, истощение ресурсов и массовое вымирание видов. Сообщества разрушаются. Прибыль от развития распределяется несправедливо, и разрыв между бедными и богатыми растет. Несправедливость, нищета, невежество и вооруженные конфликты широко распространены и причиняют много страданий. Беспрецендентный рост населения вызвал перегрузку социальных и экологических систем. Основы глобальной безопасности под угрозой. Эти тенденции опасны - но не неминуемы.
                    <br/><br/>
                    <span class="text-gray-700 text-[18px] font-bold leading-normal">Вызовы грядущего</span><br/>
                У нас есть выбор: сформировать глобальное партнерство, чтобы заботиться о Земле и друг о друге, или подвергнуться риску саморазрушения и разрушения многообразия жизни. Необходимы фундаментальные изменения в нашей системе ценностей, институтах и образе жизни. Мы должны осознать, что при условии удовлетворения основных потребностей, человеческое развитие прежде всего подразумевает существовать дольше, а не иметь больше. Мы обладаем знаниями и технологиями, достаточными для обеспечения потребностей всех людей и уменьшения нашего воздействия на окружающую среду. Глобальному гражданскому обществу крайне необходимо создать новые возможности для построения демократического и гуманного мира. Наши экологические, экономические, политические, социальные, и духовные проблемы взаимосвязаны, и вместе мы сможем выработать комплексные решения.
                    <br/><br/>

                <span class="text-gray-700 text-[18px] font-bold leading-normal">Всеобщая ответственность</span>
                <br/>
                    Для реализации этих стремлений мы должны принять решение жить с чувством всеобщей ответственности, отождествляя себя как со всем мировым сообществом, так и со своими местными общинами. Мы являемся одновременно гражданами различных наций и единого мира, в котором локальное и глобальное взаимосвязаны. Каждый разделяет ответственность за нынешнее и будущее благополучие человеческого рода и более обширного мира живого. Дух человеческой солидарности и родства со всем живым укрепляется, если мы живем с благоговением к чуду бытия, благодарностью к дару жизни и скромностью, соответствующей месту человека в природе.
                    <br/>Нам крайне необходимо такое видение основных ценностей, которое обеспечит этическую базу для формирующегося мирового сообщества. Поэтому, объединенные надеждой, мы утверждаем следующие взаимосвязанные принципы устойчивого образа жизни в качестве общих стандартов, которыми должно руководствоваться и оцениваться поведение всех индивидов, организаций, деловых кругов, правительств и транснациональных институтов.
                    <br/><br/>
                    <span class="text-gray-700 text-[18px] font-bold leading-normal">Принципы</span><br/>
                    <span class="text-gray-700 text-[18px] font-bold leading-normal">I. УВАЖАТЬ И ЗАБОТИТЬСЯ О СООБЩЕСТВЕ ЖИВОГО</span>
                <br/>
                    1. Уважать Землю и жизнь во всем ее многообразии
<br/>а. Признать, что все сущее взаимозависимо и каждая форма жизни ценна независимо от ее значимости для людей.
<br/>b. Утверждать веру в неотъемлемое достоинство каждой личности и интеллектуальный, художественный, этический и духовный потенциал человечества.
<br/>2. Заботиться о сообществе живого с пониманием, состраданием и любовью.
<br/>а. Признать, что вместе с правом владеть, управлять и использовать природные ресурсы появляется обязанность предотвращать нанесение ущерба окружающей среде и защищать права людей.
<br/>b. Утверждать, что с ростом свободы, знаний и возможностей возрастает ответственность за содействие всеобщему благосостоянию.
<br/>3. Строить справедливые, социально интегрированные, устойчивые и мирные демократические общества.
<br/>a. Обеспечить, чтобы общины на всех уровнях гарантировали права человека и основные свободы и предоставляли каждому возможность полностью реализовать свой потенциал.
<br/>b. Содействовать социальной и экономической справедливости, дающей всем возможность достичь надежных и значительных средств к существованию, соблюдая экологическую ответственность.
<br/>4. Сохранить щедрость и красоту Земли для нынешнего и будущих поколений
<br/>a. Признать, что свобода действий каждого поколения определяется потребностями будущих поколений.
<br/>b. Передать будущим поколениям ценности, традиции и институты, поддерживающие в долгосрочной перспективе процветание человеческих и экологических сообществ Земли.
<br/>Для осуществления этих четырех основных обязательств необходимо:
                    <br/><br/>
                    <span class="text-gray-700 text-[18px] font-bold leading-normal">II. ЭКОЛОГИЧЕСКАЯ ЦЕЛОСТНОСТЬ</span>
                    <br/>
                    5. Охранять и восстанавливать целостность экологических систем Земли, уделяя особое внимание биологическому разнообразию и природным процессам, обеспечивающим устойчивость жизни.
<br/>a. Усвоить на всех уровнях планы и нормы устойчивого развития, согласно которым сохранение и восстановление окружающей среды интегрируются во все инициативы по развитию.
<br/>b. Для охраны систем жизнеобеспечения Земли, поддержания биоразнообразия и сохранения нашего природного наследия создавать и охранять жизнеспособные природные и биосферные заповедники, включая нетронутые земли и акватории.
<br/>c. Содействовать восстановлению подвергнутых риску видов и экосистем.
<br/>d. Контролировать и искоренять чужеродные или генетически модифицированные организмы, вредные для естественных видов и окружающей среды, а также предотвращать интродукцию подобных пагубных организмов.
<br/>e. Управлять использованием возобновимых ресурсов, таких, как вода, почва, лесные продукты, морские обитатели таким образом, чтобы не были превышены скорости их регенерации и была обеспечена охрана здоровья экосистем.
<br/>f. Управлять добычей и использованием невозобновимых ресурсов - полезных ископаемых и жидкого топлива - таким образом, чтобы свести к минимуму их истощение и не причинять серьезного ущерба окружающей среде.
<br/>6. Практиковать предотвращение вреда для окружающей среды в качестве лучшего метода экологической защиты и выбирать путь осмотрительности в случае ограниченности знания или недостаточной информации.
<br/>a. Предпринимать меры для предотвращения серьезного или необратимого ущерба окружающей среде, даже если наука пока не располагает полными и окончательными данными.
<br/>b. Возложить бремя предъявления доказательств на тех, кто утверждает, что предлагаемая деятельность не причинит серьезного ущерба, и признать инициирующую сторону ответственной за нанесение ущерба окружающей среде.
<br/>c. Обеспечить, чтобы при принятии решений учитывались кумулятивные, долгосрочные, опосредованные, отдаленные и глобальные последствия человеческой деятельности.
<br/>d. Предотвратить загрязнение любой части окружающей среды и не допускать накопления радиоактивных, токсических или иных вредных веществ.
<br/>e. Избегать военных действий, наносящих ущерб окружающей среде.
<br/>7. Усвоить такие структуры производства, потребления и воспроизводства, которые гарантируют сохранность регенеративных возможностей Земли, соблюдение прав человека и благополучие общества.
<br/>a. Сводить к минимуму, перерабатывать и повторно использовать материалы, использованные в системах производства и потребления, и обеспечивать, чтобы оставшиеся отходы могли усваиваться экосистемами.
<br/>b. Экономно и эффективно использовать электроэнергию, все более увеличивая применение источников возобновляемой энергии, как-то солнечная и ветряная.
<br/>c. Способствовать развитию, внедрению и справедливой передаче экологически приемлемых технологий.
<br/>d. Интернализовать полную экологическую и социальную стоимость товаров и услуг в продажных ценах и создавать возможность потребителю идентифицировать продукты, соответствующие высшим социальным и экологическим стандартам.
<br/>e. Гарантировать всеобщий доступ к здравоохранению, обеспечивающему репродуктивное здоровье и регулируемое воспроизводство.
<br/>f. Усвоить образ жизни, придающий особое значение качеству жизни и материальному достатку в имеющем пределы мире.
<br/>8. Развивать изучение экологической устойчивости и способствовать открытому обмену и широкому применению приобретенных знаний.
<br/>a. Поддерживать международное научное и техническое сотрудничество в сфере устойчивости, придавая особое значение нуждам развивающихся стран.
<br/>b. Признавать и оберегать традиционные знания и духовную мудрость во всех культурах, вносящих вклад в охрану окружающей среды и благополучие человечества.
<br/>c. Обеспечить, чтобы жизненно важная для здоровья человека и охраны окружающей среды информация, включая генетические вопросы, стала всеобщим достоянием.
<br/><br/>
<span class="text-gray-700 text-[18px] font-bold leading-normal">III. СОЦИАЛЬНАЯ И ЭКОНОМИЧЕСКАЯ СПРАВЕДЛИВОСТЬ</span>
<br/>
                    9. Искоренять нищету, признав это этическим, социальным и экологическим императивом.
<br/>a. Гарантировать права человека на питьевую воду, чистый воздух, продовольственную безопасность, незагрязненную почву, жилье и безопасные санитарные условия, выделяя необходимые национальные и международные ресурсы.
<br/>b. Гарантировать всем людям доступ к образованию и ресурсам, необходимым для обеспечения устойчивых средств к существованию, предусмотреть социальную защиту и сети безопасности для тех, кто не способен к самообеспечению.
<br/>c. Признать отверженных, защитить уязвимых, помогать страждущим, создавать им возможности развивать свои способности и следовать своим устремлениям.
<br/>10. Гарантировать, чтобы экономическая деятельность и институты на всех уровнях поддерживали человеческое развитие справедливым и устойчивым образом.
<br/>а. Способствовать справедливому распределению благ внутри наций и между народами.
<br/>b. Усиливать интеллектуальные, финансовые, технические и социальные ресурсы развивающихся народов и освободить их от обременительных международных долгов.
<br/>c. Гарантировать, чтобы торговля способствовала устойчивому использованию ресурсов, охране окружающей среды и прогрессивным трудовым стандартам.
<br/>d. Требовать от транснациональных корпораций и международных финансовых организаций “прозрачной” деятельности в интересах общественности, признавая их ответственными за последствия производимых действий.
<br/>11. Утверждать гендерное равноправие и справедливость в качестве предпосылки устойчивого развития и обеспечивать всеобщий доступ к образованию, здравоохранению и экономическим возможностям.
<br/>a. Обеспечить права женщин и девочек и положить конец всякому насилию по отношению к ним.
<br/>b. Содействовать активному участию женщин во всех сферах экономической, политической, гражданской, социальной и культурной жизни в качестве полноправных партнеров, лиц, принимающих решения, лидеров и бенефициариев.
<br/>c. Укреплять семьи и обеспечивать безопасность и воспитание в атмосфере любви для всех членов семьи.
<br/>12. Защищать права всех людей, без дискриминации, на природную и социальную среду, поддерживающую их достоинство, здоровье тела и духовное благоденствие, уделяя особое внимание правам коренного населения и меньшинств.
<br/>а. Исключить дискриминацию во всех ее формах, таких как дискриминация по цвету кожи, сексуальной ориентации, расовому, половому, религиозному, языковому, национальному, этническому или социальному признакам.
<br/>b. Утверждать права коренных народов на собственные духовное начало, знания, земли, ресурсы и традиционно устойчивые модели жизнедеятельности.
<br/>c. Уважать и поддерживать молодых людей наших сообществ, давая им возможность сыграть свою существенную роль в формировании устойчивых обществ.
<br/>d. Охранять и восстанавливать места, имеющие особое значение в культурном и духовном отношении.
<br/>13. Усиливать демократические институты на всех уровнях, обеспечивать прозрачность и подотчетность управления, включая участие в принятии решений, и доступ к правосудию.
<br/>a. Защищать право каждого человека на получение ясной и своевременной информации по вопросам окружающей среды и всем планам и деятельности, которые могут иметь к нему отношение или затрагивают его интересы.
<br/>b. Поддерживать местное, региональное и глобальное гражданское общество, содействовать полноценному участию всех заинтересованных лиц и организаций в процессах принятия решений.
<br/>c. Защищать права на свободу мнений, выражений, мирных собраний, ассоциаций и на расхождение во взглядах.
<br/>d. Установить эффективный и действенный доступ к административным и независимым судебным процедурам, включая возмещение и сатисфакцию за причиненный окружающей среде ущерб и угрозу такого ущерба.
<br/>e. Искоренить коррупцию во всех государственных и частных структурах.
<br/>f. Укреплять местные сообщества, давая им возможность заботиться о своей окружающей среде и устанавливать обязанности по защите окружающей среды на уровнях управления, где эти обязанности могут выполняться наиболее эффективно.
<br/>14. Включить в формальное образование и непрерывное обучение знания, ценности, и опыт, необходимые для устойчивого образа жизни.
<br/>a. Обеспечить всех, особенно детей и молодежь, возможностью получить образование, которое позволит им активно содействовать устойчивому развитию.
<br/>b. Стимулировать вклад искусства, литературы, а также науки в образование в сфере устойчивости.
<br/>c. Усилить роль средств массовой информации в повышении осведомленности об экологических и социальных проблемах.
<br/>d. Осознать важность морального и духовного образования для устойчивого образа жизни.
<br/>15. Обращаться с уважением и состраданием ко всему живому.
<br/>a. Не допускать жестокости по отношению к животным, содержащимся в человеческом обществе, и защищать их от страданий.
<br/>b. Охранять диких животных от способов охоты, поимки в ловушки или рыбной ловли, причиняющих сильные, продолжительные или устранимые страдания.
<br/>c. Максимально возможно избегать или исключать поимку или гибель особей видов, которые не являлись целью производимой деятельности.
<br/>16. Формировать культуру толерантности, ненасилия и мира.
<br/>a. Поощрять и поддерживать взаимопонимание, солидарность и сотрудничество между всеми людьми, внутри и между нациями.
<br/>b. Применять всеобъемлющие стратегии предотвращения жестоких конфликтов и использовать методы сотрудничества для регулирования и решения экологических конфликтов и иных споров.
<br/>c. Демилитаризовать системы национальной безопасности до уровня, исключающего возможность провокации, и перенаправить военные ресурсы на мирные цели, включая экологическую реабилитацию.
<br/>d. Ликвидировать ядерное, биологическое, химическое и другие виды оружия массового уничтожения.
<br/>e. Обеспечить, чтобы использование орбитального и космического пространства поддерживало охрану окружающей среды и мир.
<br/>f. Осознать, что мир - это цельность, созданная справедливым отношением к себе, к другим людям, другим культурам, другой жизни, Земле и ко всему огромному единству, частью которого мы являемся.
<br/><br/>
     <span class="text-gray-700 text-[18px] font-bold leading-normal">ПУТЬ ВПЕРЕД</span>
<br/>
                    Как никогда прежде в истории, общая судьба призывает нас искать новое начало. Подобное обновление обещают принципы Хартии Земли. Для достижения этой перспективы мы должны взять обязательство применять и поддерживать ценности и идеалы Хартии Земли.
<br/>Это требует изменения помыслов и души. Это требует нового осознания глобальной взаимозависимости и всеобщей ответственности. Мы должны творчески развивать и применять мировоззренческую концепцию устойчивого образа жизни на местном, национальном, региональном и глобальном уровнях. Наше культурное разнообразие является бесценным наследием, и различные культуры найдут свои особые пути для реализации этого мировоззрения. Мы должны углубить и расширить глобальный диалог, который инициирует Хартия Земли, ибо нам предстоит многому научиться от совместного поиска правды и мудрости.
<br/>В жизни часто возникает напряженность между важными ценностями. Это может осложнять выбор. Тем не менее мы должны найти пути гармонизации разнообразия с уникальностью, использования свободы с общественным благом, краткосрочные задачи с долгосрочными целями. Каждая личность, семья, организация и община должны играть жизненно важную роль. Искусства, науки, религии, системы образования, средства массовой информации, деловые круги, неправительственные организации и правительства – все они призваны предложить созидательное руководство. Сотрудничество правительства, гражданского общества и деловых кругов существенно для эффективного управления.
<br/>С целью построения устойчивого всемирного сообщества, нации мира должны возобновить свои обязательства перед ООН, выполнить свои обязательства в рамках существующих международных соглашений и поддержать реализацию принципов Хартии Земли посредством обязательных международных правовых механизмов в сфере окружающей среды и развития.
<br/>Пусть нашим будет время, которое запомнится как период восстановления почитания жизни, решимости достичь устойчивости, стимулирования борьбы за справедливость и мир и ликующего торжества жизни.
                </span>
            </div>
        </div>
    </div>


@endsection