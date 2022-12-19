<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Categories;
use App\Models\Items;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);

        $item = new Items;

        $item->name = 'Dilijan Resort & Spa';
        $item->categories_id = 1;
        $item->text = 'Սպասված առաջարկ!!! Վայելեք Ձեր հանգիստը Դիլիջանի շքեղ Dilijan Resort & Spa բարձրակարգ հյուրանոցային համալիրում: Վճարե՝ք 2 անձի համար Նախաճաշ + Ճաշ 28.000դրամ։';
        $item->info = 'Գնելով 1 կուպոն 1.500 դրամով Salesboom.am-ում և ներկայացնելով այն «Dilijan Resort & Spa» հյուրանոցային համալիր` ստանում եք մինչև 30% զեղչ հյուրանոցային սենյակների և քոթեջների համար:
Ուշադրություն!!! 1 կուպոնը նախատեսված է մեկ օրվա և մեկ հյուրանոցային սենյակի համար: (1 կուպոն - 1 օր - 1 սենյակ):
Դուք կարող եք ձեռք բերել անսահմանափակ քանակի կուպոններ որպես նվեր:
Նախապես սենյակի ամրագրումը (098) 48 68 18 հեռախոսահամարով պարտադիր է:
Անպայման ներկայացրեք տպված կուպոնը կամ SMS տարբերակը:






Արժեքները նոյեմբերի 01-ից դեկտեմբերի 29-ը ներառյալ՝



Single (1 անձ) - 30.000դր. 19.000դր.

Double/Twin (2 անձ) - 40.000դր. 28.000դր.

Deluxe (2 անձի համար) - 50.000դր. 33.000դր.

Big Deluxe (2 անձի համար) - 55.000դր. 35.000դր.

Suite (2 անձի համար) - 60.000դր. 40.000դր.

Family (4-5 անձի համար) - 100.000դր. 68.000դր.

Vip (4-5 անձի համար) - 120.000դր. 80.000դր.

Քոթեջ 4 անձի համար (2 ննջասենյակ) - 120.000դր. 96.000դր.

Քոթեջ 6 անձի համար (3 ննջասենյակ) - 150.000դր. 120.000դր.

Քոթեջ 8 անձի համար (4 ննջասենյակ) - 180.000դր. 144.000դր.



Ուշադրություն!!! Նոյեմբերի 14-ից Դիլիջան ռեզորթում մեկ ամիս ժամկետով չի գործի լողավազանի ծառայությունը կապված վերանորոգման աշխատանքների կատարման հետ:





Արժեքը ներառում է`



Նախաճաշ (շվեդական կամ անհատական մատուցմամբ)
Ճաշ (շվեդական կամ անհատական մատուցմամբ)
Շոգեբաղնիք
Մարզասարհ
Սեղանի թենիս
Մանկական խաղասենյակ
Մանկական խաղահրապարակ
Wi-Fi
Ավտոկայանատեղի






Երեխաների համար`



Մինչև 7 տարեկան 1 երեխան սպասարկվում է Անվճար
Մինչև 7 տարեկան 2 երեխաների դեպքում 10.000 դրամ
Հավելյալ մահճակալը արժե 10.000 դրամ ներառյալ նախաճաշ և ճաշ








Ուշադրություն!!! 1 կուպոնը նախատեսված է մեկ օրվա և մեկ հյուրանոցային սենյակի համար: (1 կուպոն - 1 օր - 1 սենյակ):';
        $item->start_time = '2022-12-06';
        $item->end_time = '2022-12-15';
        $item->old_price = '40000';
        $item->new_price = '28000';
        $item->buy_count = 0;
        $item->main_image = 'a1.jpg';
        $item->images = '["a1.jpg","a2.jpg","a3.jpg","a4.jpg","a5.jpg"]';

        $item->save();

        Items::create([
            'name' => 'Pekini',
            'categories_id' => '2',
            'text' => 'Նոր առաջարկ հատուկ չինական խոհանոցի սիրահարների համար!!! Համտեսե՛ք չինական խոհանոցի ամենահամեղ ուտեստները 50% զեղչով «PEKINl» չինական ռեստորանում::',
            'info' => 'Գնելով 1 կուպոն 500 դրամով Salesboom.am-ում և ներկայացնելով այն «PEKIN, Wok and Roll» չինական ռեստորան, ստանում եք 50% զեղչ նշված մենյուի համար:
Ուշադրություն!!! 1 կուպոնը նախատեսված է 1 անձի և 1 անգամյա օգտագործման համար: Եթե ցանկանում եք օգտվել մի քանի անձով, ապա հարկավոր է գնել համապատասխան քանակի կուպոններ:
Ուշադրություն!!! Ակցիան գործում է միայն Սայաթ-Նովա 33 հասցեում գտնվող «PEKIN» չինական ռեստորանում:
Դուք կարող եք ձեռք բերել անսահմանափակ քանակի կուպոններ որպես նվեր:
Մինչ պատվիրելը անպայման ներկայացրեք տպված կուպոնը կամ SMS-ը կուպոնի կոդով:






Ուշադրություն! Առաջարկը գործում է առաքման և տեղում օգտվելու դեպքում ՄԻԱՅՆ ՄԻՆՉև 16։00

Ուշադրություն!!! 1 կուպոնը նախատեսված է 1 անձի և 1 անգամյա օգտագործման համար:





Աղցաներ՝



Բանջարեղենով աղցան - 2.200դր. 1.100դր.

Աղցան սոյայի ծիլերով - 2.800դր. 1.400դր.

Կայսր աղցան - 4.900դր. 2.450դր.

Ֆն-Սե աղցան - 2.800դր. 1.400դր.

Աղցան Մակաօ - 4.000դր. 2.000դր.

Կծու վարունգ - 1.900դր. 950դր.





Հավի մսով ուտեստներ







Հավ բրոկոլիով, բանջարեղենով - 4.600դր. 2.300դր.

Հավ շամպինյոնով սոյայի սոուսում - 4.600դր. 2.300դր.

Հավ կծու սոուսում, սինչուան - 4.400դր. 2.200դր.

Հավ գյուղական - 4.600դր. 2.300դր.





Հորթի մսով ուտեստներ





Հորթ կարտոֆիլով - 4.600դր. 2.300դր.

Հորթ բրոկոլիով, բանջարեղենով - 4.700դր.2.350դր.

Հորթ գյուղական - 4.700դր. 2.350դր.





Խոզի մսով ուտեստներ





Խոզ բամբուկով և սնկերով - 5.100դր.2.550դր.

Խոզ Սինչուան - 5.300դր.2.650դր.

Խոզ բանջարեղենով - 4.400դր. 2.200դր.

Խոզ Մա-Լա - 4.200դր. 2.100դր.





Բրինձ և բանջարեղեն





Բրինձ կանաչ սոխով - 1.600դր. 800դր.

Բրինձ հավով քարիի սոուսով - 2.200դր. 1․100դր.

Լապշա բանջարեղեն - 2.200դր. 1.100դր.

Լապշա կծու սոուսով - 2.600դր. 1.300դր.:',
            'main_image' => 'f1.jpg',
            'images' => '["f1.jpg","f2.jpg","f3.jpg","f4.jpg","f5.jpg"]',
            'start_time' => '2022-12-06',
            'end_time' => '2022-12-15',
            'old_price' => '8000',
            'new_price' => '5000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Items::create([
            'name' => 'Crystal Resort',
            'categories_id' => '1',
            'text' => 'Անցկացրեք հաճելի օրեր Աղվերանում!!! Երկու, երեք կամ չորս հոգանոց սենյակ + Նախաճաշ + Ընթրիք + Լողավազան + Մարզասրահ «Crystal Resort» հյուրանոցում: Վճարե՛ք 2 անձը 28.000 դրամ:',
            'info' => 'Գնելով 1 կուպոն 1.500 դրամով Salesboom.am-ում և ներկայացնելով այն «Crystal Resort» հյուրանոցում, ստանում եք մինչև 17% զեղչ երկու, երեք կամ չորս հոգանոց սենյակների համար:
Ուշադրություն!!! 1 կուպոնը նախատեսված է մեկ օրվա և մեկ հյուրանոցային սենյակի համար: Եթե ցանկանում եք հանգստանալ «Crystal Resort» հյուրանոցում մեկից ավել օրով, ապա անհրաժեշտ է օրերի քանակին համապատասխան կուպոններ գնել (1 կուպոն - 1 օր - 1 սենյակ):
Դուք կարող եք ձեռք բերել անսահմանափակ քանակի կուպոններ որպես նվեր:
Նախապես սենյակի ամրագրումը (098) 48 68 18 հեռախոսահամարով պարտադիր է:
Անպայման ներկայացրեք տպված կուպոնը կամ SMS.





Superior Double (2 անձ համար) - 28․000դր.

Triple (3 անձ համար) - 37.000դր.

FAMILY (4 անձ համար) - 48.000դր.

DELUXE (4 անձ համար) - 50.000դր.

LUXE (6 անձ համար) - 76.000դր.

APARTAMENT (4 անձ համար) - 50.000դր.

APARTAMENT (6 անձ համար) - 60.000դր.





Սենյակի գինը ներառում է`



Նախաճաշ (9:30 – 11:00)
Ընթրիք (18:30 – 20:00)
Լողավազան
Մարզասրահ
Սեղանի թենիս
Բիլիարդ
Ավտոկայանատեղի
Մանկական սենյակ
Wi-Fi անվճար ինտերնետ




Մինչև 6 տարեկան 1 երեխան անվճար

Մինչև 6 տարեկան 2 երեխան 8․000 դրամ

6-ից 10 տարեկան 1 երեխան՝ 8.000 դրամ

10 տարեկանից բարձր ՝ 10.000 դրամ





Վճարովի ծառայություն՝



Բիլիարդ` 1 ժամից հետո – 2.000 դրամ
Խաղասրահ ժետոն - 200 դրամ




Ուշադրություն!!! 1 կուպոնը նախատեսված է մեկ օրվա և մեկ հյուրանոցային սենյակի համար: Եթե ցանկանում եք հանգստանալ «Crystal Resort» հյուրանոցում մեկից ավել օրով, ապա անհրաժեշտ է օրերի քանակին համապատասխան կուպոններ գնել (1 կուպոն - 1 օր - 1 սենյակ): ',
            'main_image' => 's1.jpg',
            'images' => '["s1.jpg","s2.jpg","s3.jpg","s4.jpg","s5.jpg"]',
            'start_time' => '2022-12-06',
            'end_time' => '2022-12-15',
            'old_price' => '35000',
            'new_price' => '30000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Items::create([
            'name' => 'Fashion Show',
            'categories_id' => '4',
            'text' => 'Ամանորյա պրոֆեսիոնալ ֆոտոսեսիա 2 տարբեր տաղավարներում միայն դեկտեմբերի 24-ին 83% զեղչով միայն Fashion Show ֆոտոստուդիայի կողմից: Վճարե՛ք ընդամենը 5.000 դրամ` 30.000-ի փոխարեն:',
            'info' => 'Գնելով 1 կուպոն 2.800 դրամով Salesboom.am-ում և ներկայացնելով այն «Fashion Show» ֆոտոստուդիա` ստանում եք 83% զեղչ բացառիկ աշնանային պրոֆեսիոնալ ֆոտոսեսիայի համար:
Դուք կարող եք ձեռք բերել անսահմանափակ քանակի կուպոններ որպես նվեր:
Կուպոններ կարող եք ձեռք բերել զանգահարելով (055) 41 22 64, (093) 41 22 64 հեռախոսահամարներով:
Նախապես պարտադիր հարկավոր է գրանցվել (095) 477 994 հեռախոսահամարով: Գրանցման ժամանակ պարտադիր հարկավոր է նշել կուպոնի կոդը:
Անպայման ներկայացրեք տպված կուպոնը կամ SMS-ը կուպոնի կոդով:






Ամանորյա պրոֆեսիոնալ ֆոտոսեսիա – 30.000դր. 5.000դրամ





Ֆոտոսեսիան ներառում է`



Լավագույն 10 մշակված լուսանկար
2 տարբեր տաղավար
Մինչև 100 չմշակված լուսանկար
Աքսեսուարների տրամադրում
Կերպարի ստեղծում




Ուշադրություն!!! Մեկ կուպոնը մեկ ֆոտոսեսիայի` 10 մշակված լուսանկարի համար է և մեկ անգամյա օգտագործման համար է:




Ուշադրություն!!! Ֆոտոսեսիայի գրանցման համար անհրաժեշտ է նշել կուպոնի կոդը:





Կուպոններ կարող եք ձեռք բերել (055) 41 22 64, (093) 41 22 64 հեռախոսահամարներով:',
            'main_image' => 'd1.jpg',
            'images' => '["d1.jpg","d2.jpg","d3.jpg","d4.jpg","d5.jpg"]',
            'start_time' => '2022-12-06',
            'end_time' => '2022-12-15',
            'old_price' => '15000',
            'new_price' => '10000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);



//        Items::create([
//            'name' => 'FashionShow',
//            'categories_id' => '4',
//            'text' => 'փոխարեն:',
//            'info' => 'հեռախոսահամարներով:',
//            'main_image' => 'd1.jpg',
//            'images' => '["d1.jpg","d2.jpg","d3.jpg","d4.jpg","d5.jpg"]',
//            'start_time' => '2022-12-06',
//            'end_time' => '2022-12-15',
//            'old_price' => '15000',
//            'new_price' => '10000',
//            'created_at' => now(),
//            'updated_at' => now(),
//        ]);
    }
}
