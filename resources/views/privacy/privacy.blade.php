@extends('layout')

@section('content')
    <div class="col-12 mt-4">
        <div class="container rounded-1 shadow d-flex justify-content-center bg-light p-5">
            @if(App::getLocale() == 'am')
                <p>{!! nl2br(e('Անձնական տվյալների մշակման քաղաքականություն
                    1. Ընդհանուր դրույթներ
                    Անձնական տվյալների մշակման այս քաղաքականությունը կազմվել է 2023 թվականի հունվարի 25-ի Դաշնային օրենքի պահանջներին համապատասխան: Թիվ 152-FZ «Անձնական տվյալների մասին» (այսուհետ՝ «Անձնական տվյալների մասին» օրենք) և սահմանում է անձնական տվյալների մշակման կարգը և gni.am-ի կողմից ձեռնարկված անձնական տվյալների անվտանգությունն ապահովելու միջոցները (այսուհետ՝ Օպերատոր): )
                    1.1. Օպերատորն իր գործունեության իրականացման համար իր կարևորագույն նպատակ և պայման է դնում անձի և քաղաքացու իրավունքների և ազատությունների պահպանումը նրա անձնական տվյալների մշակման ժամանակ, ներառյալ գաղտնիության, անձնական և ընտանեկան գաղտնիքի իրավունքների պաշտպանությունը: .
                    1.2. Անձնական տվյալների մշակման հետ կապված սույն Օպերատորի քաղաքականությունը (այսուհետ՝ Քաղաքականություն) վերաբերում է բոլոր տեղեկատվությանը, որոնք Օպերատորը կարող է ստանալ https://gni.am կայքի այցելուների մասին:
                    2. Քաղաքականության մեջ օգտագործվող հիմնական հասկացությունները
                    2.1. Անձնական տվյալների ավտոմատացված մշակում - անհատական ​​տվյալների մշակում համակարգչային տեխնոլոգիայի միջոցով:
                    2.2. Անձնական տվյալների արգելափակումը անձնական տվյալների մշակման ժամանակավոր կասեցում է (եթե մշակումն անհրաժեշտ չէ անձնական տվյալները պարզաբանելու համար):
                    2.3. Վեբ կայք՝ գրաֆիկական և տեղեկատվական նյութերի, ինչպես նաև համակարգչային ծրագրերի և տվյալների բազաների մի շարք, որոնք ապահովում են դրանց հասանելիությունը համացանցում https://gni.am ցանցային հասցեով։
                    2.4. Անձնական տվյալների տեղեկատվական համակարգ՝ տվյալների բազաներում և տեղեկատվական տեխնոլոգիաների և դրանց մշակումն ապահովող տեխնիկական միջոցներում պարունակվող անձնական տվյալների մի շարք:
                    2.5. Անձնական տվյալների ապաանձնավորում - գործողություններ, որոնց արդյունքում անհնար է որոշել, առանց լրացուցիչ տեղեկատվության օգտագործման, անձնական տվյալների սեփականությունը կոնկրետ Օգտատիրոջ կամ անձնական տվյալների այլ առարկայի կողմից:
                    2.6. Անձնական տվյալների մշակում - ցանկացած գործողություն (գործողություն) կամ գործողությունների (գործողությունների) մի շարք, որոնք կատարվում են ավտոմատացման գործիքների միջոցով կամ առանց անձնական տվյալների հետ նման գործիքներ օգտագործելու, ներառյալ հավաքում, գրանցում, համակարգում, կուտակում, պահպանում, պարզաբանում (թարմացում, փոփոխություն), արդյունահանում: , օգտագործում, փոխանցում (տարածում, տրամադրում, մուտք), անձնական տվյալների ապանձնավորում, արգելափակում, ջնջում, ոչնչացում։
                    2.7. Օպերատոր՝ պետական ​​մարմին, քաղաքային մարմին, իրավաբանական կամ ֆիզիկական անձ, ինքնուրույն կամ այլ անձանց հետ համատեղ, որը կազմակերպում և (կամ) իրականացնում է անձնական տվյալների մշակումը, ինչպես նաև որոշում է անձնական տվյալների մշակման նպատակները, անձնական տվյալների կազմը. մշակված, անձնական տվյալների հետ կատարված գործողություններ (գործառնություններ):
                    2.8. Անձնական տվյալներ՝ ցանկացած տեղեկատվություն, որն ուղղակիորեն կամ անուղղակիորեն առնչվում է https://gni.am կայքի կոնկրետ կամ ճանաչելի Օգտատիրոջը:
                    2.9. Անձնական տվյալներ, որոնք թույլատրվում են բաշխման համար անձնական տվյալների սուբյեկտի կողմից՝ անձնական տվյալներ, մուտք դեպի անսահմանափակ թվով անձանց, որոնց տրամադրվում է անձնական տվյալների սուբյեկտի կողմից՝ համաձայնություն տալով անձնական տվյալների մշակմանը, որը թույլատրվում է անձնական տվյալների սուբյեկտի կողմից տարածման համար: «Անձնական տվյալների մասին» օրենքով (այսուհետ՝ տարածման համար թույլատրված անձնական տվյալներ) սահմանված կարգով։
                    2.10. Օգտատեր՝ https://gni.am կայքի ցանկացած այցելու։
                    2.11. Անձնական տվյալների տրամադրում՝ գործողություններ, որոնք ուղղված են որոշակի անձին կամ անձանց որոշակի շրջանակին անձնական տվյալների բացահայտմանը:
                    2.12. Անձնական տվյալների տարածում - ցանկացած գործողություն, որն ուղղված է անձնական տվյալների բացահայտմանը մարդկանց անորոշ շրջանակին (անձնական տվյալների փոխանցում) կամ անսահմանափակ թվով անձանց անձնական տվյալներին ծանոթանալուն, ներառյալ անձնական տվյալների բացահայտումը լրատվամիջոցներում, տեղեկատվության մեջ տեղադրումը և հեռահաղորդակցության ցանցեր կամ անձնական տվյալների հասանելիության ապահովում ցանկացած այլ եղանակով:
                    2.13. Անձնական տվյալների միջսահմանային փոխանցումը օտարերկրյա պետության տարածք անձնական տվյալների փոխանցումն է օտարերկրյա պետության մարմնին, օտարերկրյա ֆիզիկական կամ օտարերկրյա իրավաբանական անձին:
                    2.14. Անձնական տվյալների ոչնչացում - ցանկացած գործողություն, որի արդյունքում անձնական տվյալները անդառնալիորեն ոչնչացվում են, անձնական տվյալների տեղեկատվական համակարգում անձնական տվյալների բովանդակության հետագա վերականգնման անհնարինությամբ և (կամ) անձնական տվյալների նյութական կրիչներ ոչնչացվում են:
                    3. Օպերատորի հիմնական իրավունքներն ու պարտականությունները
                    3.1. Օպերատորն իրավունք ունի.
                    - ստանալ անձնական տվյալների առարկայից հավաստի տեղեկատվություն և (կամ) անձնական տվյալներ պարունակող փաստաթղթեր.
                    - դեպքումզանգահարելով անձնական տվյալների սուբյեկտի համաձայնությամբ անձնական տվյալների մշակմանը, ինչպես նաև բողոք ուղարկելով անձնական տվյալների մշակումը դադարեցնելու խնդրանքով, Օպերատորն իրավունք ունի շարունակել անձնական տվյալների մշակումը առանց անձնական տվյալների սուբյեկտի համաձայնության, եթե. կան «Անձնական տվյալների մասին» օրենքում նշված հիմքերը.
                    - ինքնուրույն որոշում է «Անձնական տվյալների մասին» օրենքով և դրան համապատասխան ընդունված կարգավորող իրավական ակտերով նախատեսված պարտավորությունների կատարումն ապահովելու համար անհրաժեշտ և բավարար միջոցառումների կազմը և ցանկը, եթե այլ բան նախատեսված չէ «Անձնական տվյալների մասին» օրենքով կամ այլ դաշնային օրենքով. օրենքները։
                    3.2. Օպերատորը պարտավոր է.
                    - իր խնդրանքով անձնական տվյալների սուբյեկտին տրամադրել տեղեկություններ նրա անձնական տվյալների մշակման վերաբերյալ.
                    - կազմակերպել անձնական տվյալների մշակումը Ռուսաստանի Դաշնության գործող օրենսդրությամբ սահմանված կարգով.
                    — պատասխանել անձնական տվյալների սուբյեկտների և նրանց օրինական ներկայացուցիչների հարցումներին և հարցումներին՝ համաձայն Անձնական տվյալների մասին օրենքի պահանջների.
                    - անձնական տվյալների սուբյեկտների իրավունքների պաշտպանության լիազորված մարմնին սույն մարմնի պահանջով զեկուցել անհրաժեշտ տեղեկատվությունը նման հարցումն ստանալու օրվանից 30 օրվա ընթացքում.
                    — հրապարակել կամ այլ կերպ տրամադրել անսահմանափակ մուտք դեպի սույն Քաղաքականությունը՝ կապված անձնական տվյալների մշակման հետ.
                    - ձեռնարկել իրավական, կազմակերպչական և տեխնիկական միջոցներ՝ անձնական տվյալները պաշտպանելու համար դրանց չարտոնված կամ պատահական մուտքից, ոչնչացումից, փոփոխումից, արգելափակումից, պատճենումից, տրամադրումից, տարածումից, ինչպես նաև անձնական տվյալների հետ կապված այլ անօրինական գործողություններից.
                    - դադարեցնել անձնական տվյալների փոխանցումը (տարածումը, տրամադրումը, մուտքը), դադարեցնել մշակումը և անձնական տվյալների ոչնչացումը Անձնական տվյալների մասին օրենքով նախատեսված կարգով և դեպքերում.
                    – կատարել «Անձնական տվյալների մասին» օրենքով նախատեսված այլ պարտականություններ:
                    4. Անձնական տվյալների սուբյեկտների հիմնական իրավունքներն ու պարտականությունները
                    4.1. Անձնական տվյալների սուբյեկտներն իրավունք ունեն՝
                    - ստանալ տեղեկատվություն իր անձնական տվյալների մշակման վերաբերյալ, բացառությամբ դաշնային օրենքներով նախատեսված դեպքերի: Տեղեկատվությունը Օպերատորի կողմից տրամադրվում է անձնական տվյալների սուբյեկտին մատչելի ձևով, և այն չպետք է պարունակի անձնական տվյալներ՝ կապված անձնական տվյալների այլ սուբյեկտների հետ, բացառությամբ այն դեպքերի, երբ կան այդպիսի անձնական տվյալների բացահայտման օրինական հիմքեր: Տեղեկությունների ցանկը և այն ստանալու կարգը սահմանվում է «Անձնական տվյալների մասին» օրենքով.
                    - պահանջել օպերատորից պարզաբանել իր անձնական տվյալները, արգելափակել կամ ոչնչացնել դրանք, եթե անձնական տվյալները թերի են, հնացած, ոչ ճշգրիտ, անօրինական կերպով ձեռք բերված կամ անհրաժեշտ չեն մշակման նշված նպատակի համար, ինչպես նաև ձեռնարկել իրավական միջոցներ՝ պաշտպանելու նրանց իրավունքները.
                    - առաջ քաշել նախնական համաձայնության պայման՝ անձնական տվյալները մշակելիս՝ շուկայում ապրանքների, աշխատանքների և ծառայությունների առաջխաղացման նպատակով.
                    - հետ կանչել անձնական տվյալների մշակման համաձայնությունը, ինչպես նաև անձնական տվյալների մշակումը դադարեցնելու հարցում ուղարկել.
                    - դիմել անձնական տվյալների սուբյեկտների իրավունքների պաշտպանության լիազոր մարմնին կամ դատարան՝ Օպերատորի ապօրինի գործողությունների կամ անգործության դեմ՝ իր անձնական տվյալները մշակելիս.
                    - իրականացնել Ռուսաստանի Դաշնության օրենսդրությամբ նախատեսված այլ իրավունքներ:
                    4.2. Անձնական տվյալների սուբյեկտները պարտավոր են.
                    - Օպերատորին տրամադրեք ձեր մասին հավաստի տվյալներ.
                    - տեղեկացնել Օպերատորին իրենց անձնական տվյալների պարզաբանման (թարմացման, փոփոխության) մասին:
                    4.3. Այն անձինք, ովքեր առանց վերջինիս համաձայնության Օպերատորին ներկայացրել են իրենց մասին կեղծ տեղեկություններ կամ անձնական տվյալների այլ առարկայի մասին տեղեկություններ, պատասխանատվություն են կրում Ռուսաստանի Դաշնության օրենսդրությանը համապատասխան:
                    5. Անձնական տվյալների մշակման սկզբունքները
                    5.1. Անձնական տվյալների մշակումն իրականացվում է օրինական և արդար հիմունքներով։
                    5.2. Անձնական տվյալների մշակումը սահմանափակվում է կոնկրետ, կանխորոշված ​​և օրինական նպատակների իրագործմամբ: Չի թույլատրվում մշակել անձնական տվյալներ, որոնք անհամատեղելի են անձնական տվյալների հավաքագրման նպատակների հետ:
                    5.3. Չի թույլատրվում միավորել անձնական տվյալներ պարունակող տվյալների բազաները, որոնց մշակումն իրականացվում է միմյանց հետ անհամատեղելի նպատակներով։
                    5.4. Մշակման ենթակա են միայն անձնական տվյալները, որոնք համապատասխանում են դրանց մշակման նպատակներին:
                    5.5. Մշակված անձնական տվյալների բովանդակությունը և շրջանակը համապատասխանում են մշակման նշված նպատակներին: Հայտարարվածի հետ կապված մշակված անձնական տվյալների ավելորդությունըդրանց վերամշակման նպատակները։
                    5.6. Անձնական տվյալները մշակելիս ապահովվում է անձնական տվյալների ճշգրտությունը, դրանց բավարարությունը և, անհրաժեշտության դեպքում, համապատասխանությունը անձնական տվյալների մշակման նպատակների հետ կապված: Օպերատորը ձեռնարկում է անհրաժեշտ միջոցներ և/կամ ապահովում դրանց ընդունումը՝ թերի կամ ոչ ճշգրիտ տվյալները հեռացնելու կամ պարզաբանելու համար:
                    5.7. Անձնական տվյալների պահպանումն իրականացվում է այնպիսի ձևով, որը թույլ է տալիս որոշել անձնական տվյալների առարկան, ոչ ավելի, քան պահանջվում է անձնական տվյալների մշակման նպատակներով, եթե անձնական տվյալների պահպանման ժամկետը սահմանված չէ դաշնային օրենքով, համաձայնագրի համաձայն. անձնական տվյալների սուբյեկտը կողմ է, շահառու կամ երաշխավոր: Մշակված անձնական տվյալները ոչնչացվում կամ ապաանձնավորվում են մշակման նպատակներին հասնելու կամ այդ նպատակներին հասնելու անհրաժեշտության կորստի դեպքում, եթե այլ բան նախատեսված չէ դաշնային օրենքով:
                    6. Անձնական տվյալների մշակման նպատակները
                    Մշակման նպատակն է Օգտատիրոջը հասանելիություն ապահովել կայքում պարունակվող ծառայություններին, տեղեկատվությանը և/կամ նյութերին
                    Անձնական տվյալներ
                    Ամբողջական անուն
                    էլեկտրոնային հասցե
                    հեռախոսահամարներ
                    Իրավական հիմքեր
                    «Տեղեկատվության, տեղեկատվական տեխնոլոգիաների և տեղեկատվության պաշտպանության մասին» դաշնային օրենքը, 2023 թվականի հունվարի 25-ի N 149-FZ.
                    Անձնական տվյալների մշակման տեսակները
                    Անձնական տվյալների փոխանցում
                    7. Անձնական տվյալների մշակման պայմանները
                    7.1. Անձնական տվյալների մշակումն իրականացվում է անձնական տվյալների սուբյեկտի համաձայնությամբ՝ նրա անձնական տվյալների մշակմանը:
                    7.2. Անձնական տվյալների մշակումն անհրաժեշտ է Ռուսաստանի Դաշնության միջազգային պայմանագրով կամ օրենքով նախատեսված նպատակներին հասնելու համար՝ օպերատորին Ռուսաստանի Դաշնության օրենսդրությամբ վերապահված գործառույթները, լիազորությունները և պարտականությունները կատարելու համար:
                    7.3. Անձնական տվյալների մշակումն անհրաժեշտ է արդարադատության իրականացման, դատական ​​ակտի կատարման, այլ մարմնի կամ պաշտոնատար անձի ակտի համար, որը ենթակա է կատարման՝ կատարողական վարույթի մասին Ռուսաստանի Դաշնության օրենսդրությանը համապատասխան:
                    7.4. Անձնական տվյալների մշակումն անհրաժեշտ է այնպիսի համաձայնագրի կատարման համար, որում անձնական տվյալների սուբյեկտը հանդիսանում է կողմ կամ շահառու կամ երաշխավոր, ինչպես նաև անձնական տվյալների սուբյեկտի նախաձեռնությամբ պայմանագիր կնքելու կամ համաձայնագիր, որի համաձայն՝ անձնական տվյալների առարկան կլինի շահառուն կամ երաշխավորը:
                    7.5. Անձնական տվյալների մշակումն անհրաժեշտ է օպերատորի կամ երրորդ անձանց իրավունքներն ու օրինական շահերն իրականացնելու կամ սոցիալապես նշանակալի նպատակներին հասնելու համար՝ պայմանով, որ անձնական տվյալների սուբյեկտի իրավունքներն ու ազատությունները չեն խախտվում:
                    7.6. Անձնական տվյալների մշակումն իրականացվում է անսահմանափակ թվով անձանց հասանելիություն, որոնց տրամադրվում է անձնական տվյալների սուբյեկտը կամ նրա խնդրանքով (այսուհետ՝ հրապարակայնորեն հասանելի անձնական տվյալներ):
                    7.7. Հրապարակման կամ պարտադիր բացահայտման ենթակա անձնական տվյալների մշակումն իրականացվում է դաշնային օրենքին համապատասխան:
                    8. Անձնական տվյալների հավաքագրման, պահպանման, փոխանցման և այլ տեսակի մշակման կարգը
                    Օպերատորի կողմից մշակվող անձնական տվյալների անվտանգությունն ապահովվում է անձնական տվյալների պաշտպանության ոլորտում գործող օրենսդրության պահանջներին լիովին համապատասխանելու համար անհրաժեշտ իրավական, կազմակերպչական և տեխնիկական միջոցառումների իրականացման միջոցով:
                    8.1. Օպերատորն ապահովում է անձնական տվյալների անվտանգությունը և ձեռնարկում է բոլոր հնարավոր միջոցները՝ չլիազորված անձանց անձնական տվյալների հասանելիությունը բացառելու համար:
                    8.2. Օգտատիրոջ անձնական տվյալները երբեք և ոչ մի դեպքում չեն փոխանցվի երրորդ կողմերին, բացառությամբ այն դեպքերի, որոնք վերաբերում են գործող օրենսդրության կատարմանը կամ եթե անձնական տվյալների սուբյեկտը համաձայնություն է տվել Օպերատորին տվյալներ փոխանցել երրորդ կողմին՝ պարտավորությունները կատարելու համար: քաղաքացիական իրավունքի պայմանագրով:
                    8.3. Անձնական տվյալների մեջ անճշտություններ հայտնաբերելու դեպքում Օգտատերը կարող է դրանք ինքնուրույն թարմացնել՝ Օպերատորին ուղարկելով ծանուցում Օպերատորի info@gni.am էլ.փոստի հասցեին՝ «Անձնական տվյալների թարմացում» մակնշմամբ:
                    8.4. Անձնական տվյալների մշակման ժամկետը որոշվում է այն նպատակների իրագործմամբ, որոնց համար հավաքվել են անձնական տվյալները, եթե այլ ժամկետ նախատեսված չէ պայմանագրով կամ կիրառելի օրենսդրությամբ:
                    Օգտատերը կարող է ցանկացած պահի հրաժարվել անձնական տվյալների մշակման վերաբերյալ իր համաձայնությունից՝ Օպերատորին էլեկտրոնային փոստով ծանուցում ուղարկելով Օպերատորի էլ.
                    8.5. Ամբողջ տեղեկատվությունը դեպիորը հավաքագրվում է երրորդ կողմի ծառայությունների, ներառյալ վճարային համակարգերի, կապի և այլ ծառայություններ մատուցողների կողմից, պահվում և մշակվում է այդ անձանց (Օպերատորների) կողմից՝ համաձայն իրենց Օգտագործողի համաձայնագրի և Գաղտնիության քաղաքականության: Անձնական տվյալների առարկան և (կամ) նշված փաստաթղթերով: Օպերատորը պատասխանատվություն չի կրում երրորդ անձանց, այդ թվում՝ սույն կետում նշված ծառայություններ մատուցողների գործողությունների համար:
                    8.6. Անձնական տվյալների սուբյեկտի կողմից սահմանված արգելքները՝ փոխանցելու համար (բացառությամբ մուտքի թույլտվության), ինչպես նաև տարածման համար թույլատրված անձնական տվյալների մշակման կամ մշակման պայմանների (բացառությամբ մուտքի ձեռքբերման), չեն կիրառվում անձնական տվյալների մշակման դեպքում։ Ռուսաստանի Դաշնության օրենքով սահմանված պետական, հասարակական և հանրային այլ շահերից:
                    8.7. Օպերատորը անձնական տվյալների մշակման ժամանակ ապահովում է անձնական տվյալների գաղտնիությունը:
                    8.8. Օպերատորը պահում է անձնական տվյալները այնպիսի ձևով, որը թույլ է տալիս որոշել անձնական տվյալների առարկան, ոչ ավելի, քան պահանջվում է անձնական տվյալների մշակման նպատակներով, եթե անձնական տվյալների պահպանման ժամկետը սահմանված չէ դաշնային օրենքով, համաձայնագրով, որին ենթակա է. անձնական տվյալների կողմը, շահառուն կամ երաշխավորը:
                    8.9. Անձնական տվյալների մշակումը դադարեցնելու պայման կարող է լինել անձնական տվյալների մշակման նպատակների ձեռքբերումը, անձնական տվյալների սուբյեկտի համաձայնության ժամկետի ավարտը, անձնական տվյալների սուբյեկտի համաձայնությունից հրաժարվելը կամ անձնական մշակումը դադարեցնելու պահանջը: տվյալները, ինչպես նաև անձնական տվյալների ապօրինի մշակման նույնականացումը:
                    9. Օպերատորի կողմից ստացված անձնական տվյալներով կատարված գործողությունների ցանկը
                    9.1. Օպերատորը հավաքում, գրանցում, համակարգում, կուտակում, պահպանում, պարզաբանում (թարմացնում, փոփոխում), քաղում, օգտագործում, փոխանցում (տարածում, տրամադրում, մուտք է գործում), ապաանձնավորում, արգելափակում, ջնջում և ոչնչացնում է անձնական տվյալները:
                    9.2. Օպերատորն իրականացնում է անձնական տվյալների ավտոմատացված մշակում` ստացված տեղեկատվության ստացմամբ և (կամ) փոխանցմամբ տեղեկատվական և հեռահաղորդակցության ցանցերի միջոցով կամ առանց դրա:
                    10. Անձնական տվյալների միջսահմանային փոխանցում
                    10.1. Օպերատորը, նախքան անձնական տվյալների անդրսահմանային փոխանցման գործունեությունը սկսելը, պարտավոր է անձնական տվյալների սուբյեկտների իրավունքների պաշտպանության լիազոր մարմնին ծանուցել անձնական տվյալների անդրսահմանային փոխանցում իրականացնելու իր մտադրության մասին: տվյալները (նման ծանուցումն ուղարկվում է անհատական ​​տվյալների մշակման մտադրության մասին ծանուցումից առանձին):
                    10.2. Մինչև վերը նշված ծանուցումը ներկայացնելը, օպերատորը պարտավոր է համապատասխան տեղեկատվություն ստանալ օտարերկրյա պետության իշխանություններից, օտարերկրյա ֆիզիկական անձանցից, օտարերկրյա իրավաբանական անձանցից, որոնց նախատեսվում է անձնական տվյալների անդրսահմանային փոխանցում:
                    11. Անձնական տվյալների գաղտնիություն
                    Օպերատորը և այլ անձինք, ովքեր մուտք են գործել անձնական տվյալներ, պարտավոր են չբացահայտել երրորդ անձանց և չտարածել անձնական տվյալները առանց անձնական տվյալների առարկայի համաձայնության, եթե այլ բան նախատեսված չէ դաշնային օրենքով:
                    12. Եզրափակիչ դրույթներ
                    12.1. Օգտատերը կարող է ցանկացած պարզաբանում ստանալ իր անձնական տվյալների մշակման հետ կապված հետաքրքրություն ներկայացնող հարցերի վերաբերյալ՝ կապ հաստատելով Օպերատորի հետ info@gni.am էլ.
                    12.2. Այս փաստաթուղթը արտացոլելու է Օպերատորի կողմից անձնական տվյալների մշակման քաղաքականության ցանկացած փոփոխություն: Քաղաքականությունը գործում է անժամկետ, քանի դեռ այն չի փոխարինվել նոր տարբերակով:
                    12.3. Քաղաքականության ընթացիկ տարբերակը հանրային սեփականությունում տեղադրված է համացանցում https://gni.am/privacy հասցեով:')) !!}</p>
            @endif
            @if(App::getLocale() == 'en')
                <p>{!! nl2br(e('Policy regarding the processing of personal data
                    1. General Provisions
                    This personal data processing policy has been drawn up in accordance with the requirements of the Federal Law of Jan 25, 2023. No. 152-FZ “On Personal Data” (hereinafter referred to as the Law on Personal Data) and determines the procedure for processing personal data and measures to ensure the security of personal data taken by gni.am (hereinafter referred to as the Operator).
                    1.1. The operator sets as its most important goal and condition for the implementation of its activities the observance of the rights and freedoms of a person and a citizen in the processing of his personal data, including the protection of the rights to privacy, personal and family secrets.
                    1.2. This Operator\'s policy regarding the processing of personal data (hereinafter referred to as the Policy) applies to all information that the Operator can receive about visitors to the website https://gni.am.
                    2. Basic concepts used in the Policy
                    2.1. Automated processing of personal data - processing of personal data using computer technology.
                    2.2. Blocking of personal data is a temporary suspension of the processing of personal data (unless the processing is necessary to clarify personal data).
                    2.3. Website - a set of graphic and information materials, as well as computer programs and databases that ensure their availability on the Internet at the network address https://gni.am.
                    2.4. Personal data information system - a set of personal data contained in databases and information technologies and technical means that ensure their processing.
                    2.5. Depersonalization of personal data - actions as a result of which it is impossible to determine, without the use of additional information, the ownership of personal data by a specific User or other subject of personal data.
                    2.6. Processing of personal data - any action (operation) or a set of actions (operations) performed using automation tools or without using such tools with personal data, including collection, recording, systematization, accumulation, storage, clarification (updating, changing), extraction, use, transfer (distribution, provision, access), depersonalization, blocking, deletion, destruction of personal data.
                    2.7. Operator - a state body, municipal body, legal entity or individual, independently or jointly with other persons organizing and / or carrying out the processing of personal data, as well as determining the purposes of processing personal data, the composition of personal data to be processed, actions (operations) performed with personal data.
                    2.8. Personal data - any information relating directly or indirectly to a specific or identifiable User of the website https://gni.am.
                    2.9. Personal data permitted by the subject of personal data for distribution - personal data, access to an unlimited number of persons to which is provided by the subject of personal data by giving consent to the processing of personal data permitted by the subject of personal data for distribution in the manner prescribed by the Law on Personal Data (hereinafter - personal data allowed for distribution).
                    2.10. User - any visitor to the website https://gni.am.
                    2.11. Providing personal data - actions aimed at disclosing personal data to a certain person or a certain circle of persons.
                    2.12. Dissemination of personal data - any actions aimed at disclosing personal data to an indefinite circle of persons (transfer of personal data) or familiarizing with personal data of an unlimited number of persons, including the disclosure of personal data in the media, placement in information and telecommunication networks or providing access to personal data in any other way.
                    2.13. Cross-border transfer of personal data is the transfer of personal data to the territory of a foreign state to an authority of a foreign state, a foreign individual or a foreign legal entity.
                    2.14. Destruction of personal data - any actions as a result of which personal data is destroyed irretrievably with the impossibility of further restoration of the content of personal data in the information system of personal data and / or material carriers of personal data are destroyed.
                    3. Basic rights and obligations of the Operator
                    3.1. The operator has the right:
                    - receive from the subject of personal data reliable information and / or documents containing personal data;
                    - in case ofcalling by the subject of personal data consent to the processing of personal data, as well as sending an appeal with a request to stop processing personal data, the Operator has the right to continue processing personal data without the consent of the subject of personal data if there are grounds specified in the Law on Personal Data;
                    - independently determine the composition and list of measures necessary and sufficient to ensure the fulfillment of the obligations provided for by the Law on Personal Data and the regulatory legal acts adopted in accordance with it, unless otherwise provided by the Law on Personal Data or other federal laws.
                    3.2. The operator is obliged:
                    - provide the subject of personal data, at his request, with information regarding the processing of his personal data;
                    — organize the processing of personal data in the manner prescribed by the current legislation of the Russian Federation;
                    — respond to requests and requests from personal data subjects and their legal representatives in accordance with the requirements of the Personal Data Law;
                    - report to the authorized body for the protection of the rights of subjects of personal data, at the request of this body, the necessary information within 30 days from the date of receipt of such a request;
                    — publish or otherwise provide unrestricted access to this Policy regarding the processing of personal data;
                    — take legal, organizational and technical measures to protect personal data from unauthorized or accidental access to them, destruction, modification, blocking, copying, provision, distribution of personal data, as well as from other illegal actions in relation to personal data;
                    - stop the transfer (distribution, provision, access) of personal data, stop processing and destroy personal data in the manner and cases provided for by the Personal Data Law;
                    – perform other duties provided for by the Law on Personal Data.
                    4. Basic rights and obligations of personal data subjects
                    4.1. Subjects of personal data have the right to:
                    - receive information regarding the processing of his personal data, except as otherwise provided by federal laws. The information is provided to the subject of personal data by the Operator in an accessible form, and it should not contain personal data related to other subjects of personal data, unless there are legal grounds for disclosing such personal data. The list of information and the procedure for obtaining it is established by the Law on Personal Data;
                    - require the operator to clarify his personal data, block or destroy them if the personal data is incomplete, outdated, inaccurate, illegally obtained or not necessary for the stated purpose of processing, as well as take legal measures to protect their rights;
                    — put forward the condition of prior consent when processing personal data in order to promote goods, works and services on the market;
                    - to withdraw consent to the processing of personal data, as well as to send a request to stop processing personal data;
                    - appeal to the authorized body for the protection of the rights of subjects of personal data or in court against illegal actions or inaction of the Operator when processing his personal data;
                    - to exercise other rights provided for by the legislation of the Russian Federation.
                    4.2. Subjects of personal data are obliged to:
                    - provide the Operator with reliable data about yourself;
                    - inform the Operator about the clarification (update, change) of their personal data.
                    4.3. Persons who have provided the Operator with false information about themselves or information about another subject of personal data without the consent of the latter, are liable in accordance with the legislation of the Russian Federation.
                    5. Principles of personal data processing
                    5.1. The processing of personal data is carried out on a legal and fair basis.
                    5.2. The processing of personal data is limited to the achievement of specific, predetermined and legitimate purposes. It is not allowed to process personal data that is incompatible with the purposes of collecting personal data.
                    5.3. It is not allowed to combine databases containing personal data, the processing of which is carried out for purposes that are incompatible with each other.
                    5.4. Only personal data that meet the purposes of their processing are subject to processing.
                    5.5. The content and scope of the processed personal data correspond to the stated purposes of processing. The redundancy of the processed personal data in relation to the declaredpurposes of their processing.
                    5.6. When processing personal data, the accuracy of personal data, their sufficiency, and, if necessary, relevance in relation to the purposes of processing personal data, is ensured. The operator takes the necessary measures and / or ensures their adoption to remove or clarify incomplete or inaccurate data.
                    5.7. The storage of personal data is carried out in a form that allows determining the subject of personal data, no longer than required by the purposes of processing personal data, if the period for storing personal data is not established by federal law, an agreement to which the subject of personal data is a party, beneficiary or guarantor. The processed personal data is destroyed or depersonalized upon reaching the goals of processing or in case of loss of the need to achieve these goals, unless otherwise provided by federal law.
                    6. Purposes of personal data processing
                    The purpose of the processing is to provide the User with access to the services, information and / or materials contained on the website
                    Personal data
                    Full Name
                    email address
                    phone numbers
                    Legal grounds
                    Federal Law "On Information, Information Technologies and Information Protection" dated Jan 25, 2023 N 149-FZ
                    Types of personal data processing
                    Transfer of personal data
                    7. Conditions for the processing of personal data
                    7.1. The processing of personal data is carried out with the consent of the subject of personal data to the processing of his personal data.
                    7.2. The processing of personal data is necessary to achieve the goals provided for by an international treaty of the Russian Federation or the law, in order to carry out the functions, powers and obligations assigned by the legislation of the Russian Federation to the operator.
                    7.3. The processing of personal data is necessary for the administration of justice, the execution of a judicial act, an act of another body or official subject to execution in accordance with the legislation of the Russian Federation on enforcement proceedings.
                    7.4. The processing of personal data is necessary for the performance of an agreement to which the subject of personal data is a party or beneficiary or guarantor, as well as to conclude an agreement on the initiative of the subject of personal data or an agreement under which the subject of personal data will be the beneficiary or guarantor.
                    7.5. The processing of personal data is necessary to exercise the rights and legitimate interests of the operator or third parties, or to achieve socially significant goals, provided that the rights and freedoms of the subject of personal data are not violated.
                    7.6. The processing of personal data is carried out, access to an unlimited number of persons to which is provided by the subject of personal data or at his request (hereinafter referred to as publicly available personal data).
                    7.7. Processing of personal data subject to publication or mandatory disclosure in accordance with federal law is carried out.
                    8. The procedure for collecting, storing, transferring and other types of processing of personal data
                    The security of personal data processed by the Operator is ensured through the implementation of legal, organizational and technical measures necessary to fully comply with the requirements of the current legislation in the field of personal data protection.
                    8.1. The Operator ensures the safety of personal data and takes all possible measures to exclude access to personal data of unauthorized persons.
                    8.2. The User\'s personal data will never, under any circumstances, be transferred to third parties, except in cases related to the implementation of applicable law or if the subject of personal data has given consent to the Operator to transfer data to a third party to fulfill obligations under a civil law contract.
                    8.3. In case of detection of inaccuracies in personal data, the User can update them independently by sending a notification to the Operator to the Operator’s e-mail address info@gni.am marked “Updating personal data”.
                    8.4. The term for the processing of personal data is determined by the achievement of the purposes for which the personal data were collected, unless a different period is provided by the contract or applicable law.
                    The User may at any time withdraw his consent to the processing of personal data by sending a notification to the Operator by e-mail to the Operator\'s email address info@gni.am marked "Withdrawal of consent to the processing of personal data".
                    8.5. All information towhich is collected by third-party services, including payment systems, communications and other service providers, is stored and processed by these persons (Operators) in accordance with their User Agreement and Privacy Policy. The subject of personal data and / or with the specified documents. The Operator is not responsible for the actions of third parties, including the service providers specified in this paragraph.
                    8.6. The prohibitions established by the subject of personal data on the transfer (except for granting access), as well as on the processing or processing conditions (except for obtaining access) of personal data permitted for distribution, do not apply in cases of processing personal data in state, public and other public interests determined by law RF.
                    8.7. The operator, when processing personal data, ensures the confidentiality of personal data.
                    8.8. The operator stores personal data in a form that allows to determine the subject of personal data, no longer than required by the purposes of processing personal data, if the period for storing personal data is not established by federal law, an agreement to which the subject of personal data is a party, beneficiary or guarantor.
                    8.9. The condition for terminating the processing of personal data may be the achievement of the purposes of processing personal data, the expiration of the consent of the subject of personal data, the withdrawal of consent by the subject of personal data or the requirement to stop processing personal data, as well as the identification of unlawful processing of personal data.
                    9. List of actions performed by the Operator with the received personal data
                    9.1. The operator collects, records, systematizes, accumulates, stores, clarifies (updates, changes), extracts, uses, transfers (distributes, provides, accesses), depersonalizes, blocks, deletes and destroys personal data.
                    9.2. The operator carries out automated processing of personal data with the receipt and / or transmission of the received information via information and telecommunication networks or without it.
                    10. Cross-border transfer of personal data
                    10.1. The operator, prior to the commencement of activities for the cross-border transfer of personal data, is obliged to notify the authorized body for the protection of the rights of subjects of personal data of his intention to carry out a cross-border transfer of personal data (such a notification is sent separately from the notification of the intention to process personal data).
                    10.2. Before submitting the above notification, the operator is obliged to obtain relevant information from the authorities of a foreign state, foreign individuals, foreign legal entities to whom the cross-border transfer of personal data is planned.
                    11. Confidentiality of personal data
                    The operator and other persons who have gained access to personal data are obliged not to disclose to third parties and not to distribute personal data without the consent of the subject of personal data, unless otherwise provided by federal law.
                    12. Final provisions
                    12.1. The User can receive any clarifications on issues of interest regarding the processing of his personal data by contacting the Operator via e-mail info@gni.am.
                    12.2. This document will reflect any changes in the policy of processing personal data by the Operator. The policy is valid indefinitely until it is replaced by a new version.
                    12.3. The current version of the Policy in the public domain is located on the Internet at https://gni.am/privacy.')) !!}</p>
            @endif
            @if(App::getLocale() == 'ru')
                <p>{!! nl2br(e('Политика в отношении обработки персональных данных
                    1. Общие положения
                    Настоящая политика обработки персональных данных составлена в соответствии с требованиями Федерального закона от 25.01.2023. № 152-ФЗ «О персональных данных» (далее — Закон о персональных данных) и определяет порядок обработки персональных данных и меры по обеспечению безопасности персональных данных, предпринимаемые gni.am (далее — Оператор).
                    1.1. Оператор ставит своей важнейшей целью и условием осуществления своей деятельности соблюдение прав и свобод человека и гражданина при обработке его персональных данных, в том числе защиты прав на неприкосновенность частной жизни, личную и семейную тайну.
                    1.2. Настоящая политика Оператора в отношении обработки персональных данных (далее — Политика) применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта https://gni.am.
                    2. Основные понятия, используемые в Политике
                    2.1. Автоматизированная обработка персональных данных — обработка персональных данных с помощью средств вычислительной техники.
                    2.2. Блокирование персональных данных — временное прекращение обработки персональных данных (за исключением случаев, если обработка необходима для уточнения персональных данных).
                    2.3. Веб-сайт — совокупность графических и информационных материалов, а также программ для ЭВМ и баз данных, обеспечивающих их доступность в сети интернет по сетевому адресу https://gni.am.
                    2.4. Информационная система персональных данных — совокупность содержащихся в базах данных персональных данных и обеспечивающих их обработку информационных технологий и технических средств.
                    2.5. Обезличивание персональных данных — действия, в результате которых невозможно определить без использования дополнительной информации принадлежность персональных данных конкретному Пользователю или иному субъекту персональных данных.
                    2.6. Обработка персональных данных — любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных.
                    2.7. Оператор — государственный орган, муниципальный орган, юридическое или физическое лицо, самостоятельно или совместно с другими лицами организующие и/или осуществляющие обработку персональных данных, а также определяющие цели обработки персональных данных, состав персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными.
                    2.8. Персональные данные — любая информация, относящаяся прямо или косвенно к определенному или определяемому Пользователю веб-сайта https://gni.am.
                    2.9. Персональные данные, разрешенные субъектом персональных данных для распространения, — персональные данные, доступ неограниченного круга лиц к которым предоставлен субъектом персональных данных путем дачи согласия на обработку персональных данных, разрешенных субъектом персональных данных для распространения в порядке, предусмотренном Законом о персональных данных (далее — персональные данные, разрешенные для распространения).
                    2.10. Пользователь — любой посетитель веб-сайта https://gni.am.
                    2.11. Предоставление персональных данных — действия, направленные на раскрытие персональных данных определенному лицу или определенному кругу лиц.
                    2.12. Распространение персональных данных — любые действия, направленные на раскрытие персональных данных неопределенному кругу лиц (передача персональных данных) или на ознакомление с персональными данными неограниченного круга лиц, в том числе обнародование персональных данных в средствах массовой информации, размещение в информационно-телекоммуникационных сетях или предоставление доступа к персональным данным каким-либо иным способом.
                    2.13. Трансграничная передача персональных данных — передача персональных данных на территорию иностранного государства органу власти иностранного государства, иностранному физическому или иностранному юридическому лицу.
                    2.14. Уничтожение персональных данных — любые действия, в результате которых персональные данные уничтожаются безвозвратно с невозможностью дальнейшего восстановления содержания персональных данных в информационной системе персональных данных и/или уничтожаются материальные носители персональных данных.
                    3. Основные права и обязанности Оператора
                    3.1. Оператор имеет право:
                    — получать от субъекта персональных данных достоверные информацию и/или документы, содержащие персональные данные;
                    — в случае отзыва субъектом персональных данных согласия на обработку персональных данных, а также, направления обращения с требованием о прекращении обработки персональных данных, Оператор вправе продолжить обработку персональных данных без согласия субъекта персональных данных при наличии оснований, указанных в Законе о персональных данных;
                    — самостоятельно определять состав и перечень мер, необходимых и достаточных для обеспечения выполнения обязанностей, предусмотренных Законом о персональных данных и принятыми в соответствии с ним нормативными правовыми актами, если иное не предусмотрено Законом о персональных данных или другими федеральными законами.
                    3.2. Оператор обязан:
                    — предоставлять субъекту персональных данных по его просьбе информацию, касающуюся обработки его персональных данных;
                    — организовывать обработку персональных данных в порядке, установленном действующим законодательством РФ;
                    — отвечать на обращения и запросы субъектов персональных данных и их законных представителей в соответствии с требованиями Закона о персональных данных;
                    — сообщать в уполномоченный орган по защите прав субъектов персональных данных по запросу этого органа необходимую информацию в течение 30 дней с даты получения такого запроса;
                    — публиковать или иным образом обеспечивать неограниченный доступ к настоящей Политике в отношении обработки персональных данных;
                    — принимать правовые, организационные и технические меры для защиты персональных данных от неправомерного или случайного доступа к ним, уничтожения, изменения, блокирования, копирования, предоставления, распространения персональных данных, а также от иных неправомерных действий в отношении персональных данных;
                    — прекратить передачу (распространение, предоставление, доступ) персональных данных, прекратить обработку и уничтожить персональные данные в порядке и случаях, предусмотренных Законом о персональных данных;
                    — исполнять иные обязанности, предусмотренные Законом о персональных данных.
                    4. Основные права и обязанности субъектов персональных данных
                    4.1. Субъекты персональных данных имеют право:
                    — получать информацию, касающуюся обработки его персональных данных, за исключением случаев, предусмотренных федеральными законами. Сведения предоставляются субъекту персональных данных Оператором в доступной форме, и в них не должны содержаться персональные данные, относящиеся к другим субъектам персональных данных, за исключением случаев, когда имеются законные основания для раскрытия таких персональных данных. Перечень информации и порядок ее получения установлен Законом о персональных данных;
                    — требовать от оператора уточнения его персональных данных, их блокирования или уничтожения в случае, если персональные данные являются неполными, устаревшими, неточными, незаконно полученными или не являются необходимыми для заявленной цели обработки, а также принимать предусмотренные законом меры по защите своих прав;
                    — выдвигать условие предварительного согласия при обработке персональных данных в целях продвижения на рынке товаров, работ и услуг;
                    — на отзыв согласия на обработку персональных данных, а также, на направление требования о прекращении обработки персональных данных;
                    — обжаловать в уполномоченный орган по защите прав субъектов персональных данных или в судебном порядке неправомерные действия или бездействие Оператора при обработке его персональных данных;
                    — на осуществление иных прав, предусмотренных законодательством РФ.
                    4.2. Субъекты персональных данных обязаны:
                    — предоставлять Оператору достоверные данные о себе;
                    — сообщать Оператору об уточнении (обновлении, изменении) своих персональных данных.
                    4.3. Лица, передавшие Оператору недостоверные сведения о себе, либо сведения о другом субъекте персональных данных без согласия последнего, несут ответственность в соответствии с законодательством РФ.
                    5. Принципы обработки персональных данных
                    5.1. Обработка персональных данных осуществляется на законной и справедливой основе.
                    5.2. Обработка персональных данных ограничивается достижением конкретных, заранее определенных и законных целей. Не допускается обработка персональных данных, несовместимая с целями сбора персональных данных.
                    5.3. Не допускается объединение баз данных, содержащих персональные данные, обработка которых осуществляется в целях, несовместимых между собой.
                    5.4. Обработке подлежат только персональные данные, которые отвечают целям их обработки.
                    5.5. Содержание и объем обрабатываемых персональных данных соответствуют заявленным целям обработки. Не допускается избыточность обрабатываемых персональных данных по отношению к заявленным целям их обработки.
                    5.6. При обработке персональных данных обеспечивается точность персональных данных, их достаточность, а в необходимых случаях и актуальность по отношению к целям обработки персональных данных. Оператор принимает необходимые меры и/или обеспечивает их принятие по удалению или уточнению неполных или неточных данных.
                    5.7. Хранение персональных данных осуществляется в форме, позволяющей определить субъекта персональных данных, не дольше, чем этого требуют цели обработки персональных данных, если срок хранения персональных данных не установлен федеральным законом, договором, стороной которого, выгодоприобретателем или поручителем по которому является субъект персональных данных. Обрабатываемые персональные данные уничтожаются либо обезличиваются по достижении целей обработки или в случае утраты необходимости в достижении этих целей, если иное не предусмотрено федеральным законом.
                    6. Цели обработки персональных данных
                    Цель обработки	предоставление доступа Пользователю к сервисам, информации и/или материалам, содержащимся на веб-сайте
                    Персональные данные
                    фамилия, имя, отчество
                    электронный адрес
                    номера телефонов
                    Правовые основания
                    Федеральный закон «Об информации, информационных технологиях и о защите информации» от 25.01.2023 N 149-ФЗ
                    Виды обработки персональных данных
                    Передача персональных данных
                    7. Условия обработки персональных данных
                    7.1. Обработка персональных данных осуществляется с согласия субъекта персональных данных на обработку его персональных данных.
                    7.2. Обработка персональных данных необходима для достижения целей, предусмотренных международным договором Российской Федерации или законом, для осуществления возложенных законодательством Российской Федерации на оператора функций, полномочий и обязанностей.
                    7.3. Обработка персональных данных необходима для осуществления правосудия, исполнения судебного акта, акта другого органа или должностного лица, подлежащих исполнению в соответствии с законодательством Российской Федерации об исполнительном производстве.
                    7.4. Обработка персональных данных необходима для исполнения договора, стороной которого либо выгодоприобретателем или поручителем по которому является субъект персональных данных, а также для заключения договора по инициативе субъекта персональных данных или договора, по которому субъект персональных данных будет являться выгодоприобретателем или поручителем.
                    7.5. Обработка персональных данных необходима для осуществления прав и законных интересов оператора или третьих лиц либо для достижения общественно значимых целей при условии, что при этом не нарушаются права и свободы субъекта персональных данных.
                    7.6. Осуществляется обработка персональных данных, доступ неограниченного круга лиц к которым предоставлен субъектом персональных данных либо по его просьбе (далее — общедоступные персональные данные).
                    7.7. Осуществляется обработка персональных данных, подлежащих опубликованию или обязательному раскрытию в соответствии с федеральным законом.
                    8. Порядок сбора, хранения, передачи и других видов обработки персональных данных
                    Безопасность персональных данных, которые обрабатываются Оператором, обеспечивается путем реализации правовых, организационных и технических мер, необходимых для выполнения в полном объеме требований действующего законодательства в области защиты персональных данных.
                    8.1. Оператор обеспечивает сохранность персональных данных и принимает все возможные меры, исключающие доступ к персональным данным неуполномоченных лиц.
                    8.2. Персональные данные Пользователя никогда, ни при каких условиях не будут переданы третьим лицам, за исключением случаев, связанных с исполнением действующего законодательства либо в случае, если субъектом персональных данных дано согласие Оператору на передачу данных третьему лицу для исполнения обязательств по гражданско-правовому договору.
                    8.3. В случае выявления неточностей в персональных данных, Пользователь может актуализировать их самостоятельно, путем направления Оператору уведомление на адрес электронной почты Оператора info@gni.am с пометкой «Актуализация персональных данных».
                    8.4. Срок обработки персональных данных определяется достижением целей, для которых были собраны персональные данные, если иной срок не предусмотрен договором или действующим законодательством.
                    Пользователь может в любой момент отозвать свое согласие на обработку персональных данных, направив Оператору уведомление посредством электронной почты на электронный адрес Оператора info@gni.am с пометкой «Отзыв согласия на обработку персональных данных».
                    8.5. Вся информация, которая собирается сторонними сервисами, в том числе платежными системами, средствами связи и другими поставщиками услуг, хранится и обрабатывается указанными лицами (Операторами) в соответствии с их Пользовательским соглашением и Политикой конфиденциальности. Субъект персональных данных и/или с указанными документами. Оператор не несет ответственность за действия третьих лиц, в том числе указанных в настоящем пункте поставщиков услуг.
                    8.6. Установленные субъектом персональных данных запреты на передачу (кроме предоставления доступа), а также на обработку или условия обработки (кроме получения доступа) персональных данных, разрешенных для распространения, не действуют в случаях обработки персональных данных в государственных, общественных и иных публичных интересах, определенных законодательством РФ.
                    8.7. Оператор при обработке персональных данных обеспечивает конфиденциальность персональных данных.
                    8.8. Оператор осуществляет хранение персональных данных в форме, позволяющей определить субъекта персональных данных, не дольше, чем этого требуют цели обработки персональных данных, если срок хранения персональных данных не установлен федеральным законом, договором, стороной которого, выгодоприобретателем или поручителем по которому является субъект персональных данных.
                    8.9. Условием прекращения обработки персональных данных может являться достижение целей обработки персональных данных, истечение срока действия согласия субъекта персональных данных, отзыв согласия субъектом персональных данных или требование о прекращении обработки персональных данных, а также выявление неправомерной обработки персональных данных.
                    9. Перечень действий, производимых Оператором с полученными персональными данными
                    9.1. Оператор осуществляет сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление и уничтожение персональных данных.
                    9.2. Оператор осуществляет автоматизированную обработку персональных данных с получением и/или передачей полученной информации по информационно-телекоммуникационным сетям или без таковой.
                    10. Трансграничная передача персональных данных
                    10.1. Оператор до начала осуществления деятельности по трансграничной передаче персональных данных обязан уведомить уполномоченный орган по защите прав субъектов персональных данных о своем намерении осуществлять трансграничную передачу персональных данных (такое уведомление направляется отдельно от уведомления о намерении осуществлять обработку персональных данных).
                    10.2. Оператор до подачи вышеуказанного уведомления, обязан получить от органов власти иностранного государства, иностранных физических лиц, иностранных юридических лиц, которым планируется трансграничная передача персональных данных, соответствующие сведения.
                    11. Конфиденциальность персональных данных
                    Оператор и иные лица, получившие доступ к персональным данным, обязаны не раскрывать третьим лицам и не распространять персональные данные без согласия субъекта персональных данных, если иное не предусмотрено федеральным законом.
                    12. Заключительные положения
                    12.1. Пользователь может получить любые разъяснения по интересующим вопросам, касающимся обработки его персональных данных, обратившись к Оператору с помощью электронной почты info@gni.am.
                    12.2. В данном документе будут отражены любые изменения политики обработки персональных данных Оператором. Политика действует бессрочно до замены ее новой версией.
                    12.3. Актуальная версия Политики в свободном доступе расположена в сети Интернет по адресу https://gni.am/privacy.')) !!}</p>
            @endif
        </div>
    </div>
@endsection
