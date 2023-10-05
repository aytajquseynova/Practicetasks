<?php
    #1) bir array hazırlayın. (array metodu ilə) Onun içərisində 10 element olsun (təkrarlanan elementlər də olsun). (Hansı data tipində olmasının fərqi yoxdur)
    #Həmin massivin elementlərinin sayını tapın(massivin uzunluğunu)
    // $arr = array(1, 2, 3, 4, 5, 6, 6, 7, 1, 8);
    // echo count($arr);

    # a 
    # Massivin son elementini tapın(əgər bacarırsınızsa, həm hazır metoddan istifadə edin, həm də ənənəvi yoldan)
    // $arr = array('aytac', 'nargiz', 'rena');
    // echo $arr[count($arr)-1];

    # b) Massivin ilk elementini tapın
    // $arr = array('aytac', 'nargiz', 'rena');
    // echo $arr[0];

    #c  
    // Massivdə təkrarlanan elementlərin sayını tapmaq
    // $arr1 = ['aytac', 'aysun', 'aygun'];
    // $arr2 = ['aytac', 'cinare', 'rena', 'aygun'];
    // print_r (count(array_intersect($arr1, $arr2)));

    //  Massivdə təkrarlanan elemnetləri silmək
    // $arr1 = ['aytac', 'aysun', 'aygun'];
    // $arr2 = ['aytac', 'cinare', 'rena', 'aygun'];
    // print_r (array_diff($arr1, $arr2));

    #start, next, end methods
    // echo next($arr);
    // echo next($arr);

    # e) Massivə hər hansısa elementi əlavə etmək
    // array_push($arr, "nermin");
    // print_r ($arr);

    # f) Massivin sonuncu elementini silmək
    // array_pop($arr);
    // print_r($arr);

    # h) Massivi tərs çevirin
    // print_r(array_reverse($arr));

    # 2)
    # İki massiv hazırlayın və həmin massivləri birləşdirin. Amma bu dəfə massivləri [] metodu ilə hazırlamaq lazımdır ve hər iki
    # massivdə eyni olan elementlər olmalıdır. 
    // $arr1 = ['aytac', 'aysun', 'aygun'];
    // $arr2 = ['aytac', 'cinare', 'rena', 'aygun'];
    // print_r (array_intersect($arr1, $arr2));
    // print_r(array_merge($arr, $arr1));
    



    # 3) 
    # b Massivdəki bütün elementlərin cəmini tapın
    //  $arr = [1, 2, 3, 4, 5];
    // echo array_sum($arr);

    #c Massivdəki bütün elementlərin hasilini tapın
    // $arr = [1, 2, 3, 4, 5];
    // echo array_product($arr);

    # Massivdəki elementləri bir string şəklinə salın
//    $arr = [1, 2, 3, 4, 5];
//    $newArr = implode($arr);
//    var_dump ($newArr);

    # Bu stringdəki bütün boşluqları silin
    // $str = "Salam, mən söz verirəm ki, php üzrə mütəxəxssiz olacam";
    // $arr =  explode(" ", $str);
    // foreach($arr as $v){
    //   echo $v;
    // }

    # Stringdəki bütün simvolları böyük registə çevirin
    // echo mb_strtoupper($str);

    // $arr = [1, 2, 3, 4, 5];
    // var_dump($arr);
    // echo "<pre>";
    // print_r ($arr);
    // for ($i = 1; )


?>