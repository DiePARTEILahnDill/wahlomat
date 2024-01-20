<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
    <meta charset="UTF-8" />
    <title>PARTEIOMAT</title>
    <link rel="stylesheet" href="style.css">
    <html lang="de">
    <script src="all.js" ></script>
    <script src="jquery-3.5.1.min.js"></script>
    <script>
      var divState = {};
	    function showhide(id) {
	    if (document.getElementById) {
	       var divid = document.getElementById(id);
	       divState[id] = (divState[id]) ? false : true;
	       for (var div in divState){
	          if (divState[div] && div != id){
	          document.getElementById(div).style.display = 'block';
	          divState[div] = false;
	            }
	        }
	       divid.style.display = (divid.style.display == 'block' ? 'block' : 'block');
	      }
	   }
    </script>
    <script>
    window.onload = function() {
hideblock('questions');
    };
    </script>
  </head>

  <body>

<script>
  var divState = {};
  function hideblock(id) {
  if (document.getElementById) {
     var divid = document.getElementById(id);
     divState[id] = (divState[id]) ? false : true;
     for (var div in divState){
        if (divState[div] && div != id){
          document.getElementById(div).style.display = 'block';
          divState[div] = false;
            }
        }
       divid.style.display = (divid.style.display == 'block' ? 'none' : 'block');
    }
 }
</script>
  <div id='questions'>
    <div id="Headericon"><div id="crosssign">✘</div></div>
    <div class="formme">
        <div id="Headertext"><h1> Komm<wbr>un<wbr>al<wbr>wahl<wbr>check<br>Wetzlar 2021</h1><br><div id="next" onclick="showhide('div_1');"><div id="nxtbuttom"><a href="#next0">Zur ersten These »</a></div></div></div>
           <form action="" method="post">
             <div id="content">

               <div id="div_1" class="form">
                 <div class="col-2">
                   <label for="formcontent1" class="formcontent1"><a id="next0"></a></label></div>
                   <div id="innerspan"><span class="p2"><q>Die di<wbr>gi<wbr>tal<wbr>en An<wbr>ge<wbr>bote des Rat<wbr>haus<wbr>es soll<wbr>en deut<wbr>lich aus<wbr>ge<wbr>wei<wbr>tet werden.</q></span><br><p3>Frage 1/26</p3></div>
                <div class="ph-2">
                  <div id="innerph">
                   <div id="plusplus" onclick="plusplusfcn()"><i class="far fa-grin-beam"></i></div>
              	   <div id="plus" onclick="plusfcn()"><i class="far fa-smile"></i></div>
              	   <div id="neutral" onclick="neutralfcn()"><i class="far fa-meh"></i></div>
              	   <div id="minus" onclick="minusfcn()"><i class="far fa-frown"></i></div>
              	   <div id="minusminus" onclick="minusminusfcn()"><i class="far fa-angry"></i></div>
                 </div>
                 <div id="next" onclick="showhide('div_2');"><div id="nxtbuttom"><a href="#next2">Weiter zur nächsten These »</a></div></div>
               </div></div>

               <div id="div_2" class="form">
                 <div class="col-3">
                   <label for="formcontent2" class="formcontent2"><a id="next2"></a></label></div>
                   <div id="innerspan"><span class="p2"><q>Es soll ein neues Kino in den Domhöfen geben.</q></span><br><p3>Frage 2/26</p3></span></div>
                <div class="ph-3">
                  <div id="innerph">
                   <div id="plusplus2" onclick="plusplusfcn2()"><i class="far fa-grin-beam"></i></div>
                   <div id="plus2" onclick="plusfcn2()"><i class="far fa-smile"></i></div>
                   <div id="neutral2" onclick="neutralfcn2()"><i class="far fa-meh"></i></div>
                   <div id="minus2" onclick="minusfcn2()"><i class="far fa-frown"></i></div>
                   <div id="minusminus2" onclick="minusminusfcn2()"><i class="far fa-angry"></i></div>
                 </div>
                 <div id="next" onclick="showhide('div_3');"><a href="#next3">Weiter zur nächsten These »</a></div>
               </div></div>

               <div id="div_3" class="form">
                <div class="col-4">
                 <label for="formcontent3" class="formcontent3"><a id="next3"></a></label></div>
                 <div id="innerspan"><span class="p2"><q>Das städtische Rad- und Fuß<wbr>ver<wbr>kehrs<wbr>kon<wbr>zept soll schneller um<wbr>ge<wbr>setzt werden.</q></span><br><p3>Frage 3/26</p3></span></div>
                <div class="ph-4">
                  <div id="innerph">
                   <div id="plusplus3" onclick="plusplusfcn3()"><i class="far fa-grin-beam"></i></div>
                   <div id="plus3" onclick="plusfcn3()"><i class="far fa-smile"></i></div>
                   <div id="neutral3" onclick="neutralfcn3()"><i class="far fa-meh"></i></div>
                   <div id="minus3" onclick="minusfcn3()"><i class="far fa-frown"></i></div>
                   <div id="minusminus3" onclick="minusminusfcn3()"><i class="far fa-angry"></i></div></div>
                </div>
                <div id="next" onclick="showhide('div_4');"><a href="#next4">Weiter zur nächsten These »</a></div>
               </div>

               <div id="div_4" class="form">
                <div class="col-5">
                 <label for="formcontent4" class="formcontent4"><a id="next4"></a></label></div>
                 <div id="innerspan"><span class="p2"><q>Die B49 soll in Zukunft in einem Tunnel um Dalheim und das Stadtgebiet herumgeführt werden.</q></span><br><p3>Frage 4/26</p3></span></div>
                <div class="ph-5">
                  <div id="innerph">
                   <div id="plusplus4" onclick="plusplusfcn4()"><i class="far fa-grin-beam"></i></div>
                   <div id="plus4" onclick="plusfcn4()"><i class="far fa-smile"></i></div>
                   <div id="neutral4" onclick="neutralfcn4()"><i class="far fa-meh"></i></div>
                   <div id="minus4" onclick="minusfcn4()"><i class="far fa-frown"></i></div>
                   <div id="minusminus4" onclick="minusminusfcn4()"><i class="far fa-angry"></i></div></div>
                </div>
                <div id="next4" onclick="showhide('div_5');"><a href="#next5">Weiter zur nächsten These »</a></div>
               </div>

               <div id="div_5" class="form">
                <div class="col-6">
                 <label for="formcontent5" class="formcontent5"><a id="next5"></a></label></div>
                 <div id="innerspan"><span class="p2"><q>Die Grundsteuer soll gesenkt werden.</q></span><br><p3>Frage 5/26</p3></span></div>
                 <div class="ph-6">
                  <div id="innerph">
                   <div id="plusplus5" onclick="plusplusfcn5()"><i class="far fa-grin-beam"></i></div>
                   <div id="plus5" onclick="plusfcn5()"><i class="far fa-smile"></i></div>
                   <div id="neutral5" onclick="neutralfcn5()"><i class="far fa-meh"></i></div>
                   <div id="minus5" onclick="minusfcn5()"><i class="far fa-frown"></i></div>
                   <div id="minusminus5" onclick="minusminusfcn5()"><i class="far fa-angry"></i></div></div>
                </div>
                <div id="next5" onclick="showhide('div_6');"><a href="#next6">Weiter zur nächsten These »</a></div>
               </div>

               <div id="div_6" class="form">
                <div class="col-7">
                 <label for="formcontent6" class="formcontent6"><a id="next6"></a></label></div>
                 <div id="innerspan"><span class="p2"><q>Die Pläne für das Gewerbegebiet Münchholzhausen-Nord sollen umgesetzt werden.</q></span><br><p3>Frage 6/26</p3></span></div>
                 <div class="ph-7">
                 <div id="innerph">
                  <div id="plusplus6" onclick="plusplusfcn6()"><i class="far fa-grin-beam"></i></div>
                  <div id="plus6" onclick="plusfcn6()"><i class="far fa-smile"></i></div>
                  <div id="neutral6" onclick="neutralfcn6()"><i class="far fa-meh"></i></div>
                  <div id="minus6" onclick="minusfcn6()"><i class="far fa-frown"></i></div>
                  <div id="minusminus6" onclick="minusminusfcn6()"><i class="far fa-angry"></i></div></div>
                </div>
                <div id="next6" onclick="showhide('div_7');"><a href="#next7">Weiter zur nächsten These »</a></div>
               </div>

               <div id="div_7" class="form">
                <div class="col-8">
                 <label for="formcontent7" class="formcontent7"><a id="next7"></a></label></div>
                 <div id="innerspan"><span class="p2"><q>Es soll gesetzlich geregelt werden, dass Parteilisten für Kommunalwahlen paritätisch nach Geschlecht besetzt werden.</q></span><br><p3>Frage 7/26</p3></span></div>
                 <div class="ph-8">
                  <div id="innerph">
                    <div id="plusplus7" onclick="plusplusfcn7()"><i class="far fa-grin-beam"></i></div>
                    <div id="plus7" onclick="plusfcn7()"><i class="far fa-smile"></i></div>
                    <div id="neutral7" onclick="neutralfcn7()"><i class="far fa-meh"></i></div>
                    <div id="minus7" onclick="minusfcn7()"><i class="far fa-frown"></i></div>
                    <div id="minusminus7" onclick="minusminusfcn7()"><i class="far fa-angry"></i></div></div>
                 </div>
                 <div id="next7" onclick="showhide('div_8');"><a href="#next8">Weiter zur nächsten These »</a></div>
               </div>

               <div id="div_8" class="form">
                <div class="col-9">
                <label for="formcontent8" class="formcontent8"><a id="next8"></a></label></div>
                <div id="innerspan"><span class="p2"><q>Wer mit dem PKW in die Innenstadt fährt, soll zukünftig eine Gebühr zahlen.</q></span><br><p3>Frage 8/26</p3></span></div>
                 <div class="ph-9">
                  <div id="innerph">
                    <div id="plusplus8" onclick="plusplusfcn8()"><i class="far fa-grin-beam"></i></div>
                    <div id="plus8" onclick="plusfcn8()"><i class="far fa-smile"></i></div>
                    <div id="neutral8" onclick="neutralfcn8()"><i class="far fa-meh"></i></div>
                    <div id="minus8" onclick="minusfcn8()"><i class="far fa-frown"></i></div>
                    <div id="minusminus8" onclick="minusminusfcn8()"><i class="far fa-angry"></i></div></div>
                  </div>
                  <div id="next8" onclick="showhide('div_9');"><a href="#next9">Weiter zur nächsten These »</a></div>
               </div>

               <div id="div_9" class="form">
                <div class="col-10">
                <label for="formcontent9" class="formcontent9"><a id="next9"></a></label></div>
                <div id="innerspan"><span class="p2"><q>Kumulieren und Panaschieren soll abgeschafft werden.</q></span><br><p3>Frage 9/26</p3></span></div>
                 <div class="ph-10">
                 <div id="innerph">
                  <div id="plusplus9" onclick="plusplusfcn9()"><i class="far fa-grin-beam"></i></div>
                  <div id="plus9" onclick="plusfcn9()"><i class="far fa-smile"></i></div>
                  <div id="neutral9" onclick="neutralfcn9()"><i class="far fa-meh"></i></div>
                  <div id="minus9" onclick="minusfcn9()"><i class="far fa-frown"></i></div>
                  <div id="minusminus9" onclick="minusminusfcn9()"><i class="far fa-angry"></i></div></div>
                 </div>
                 <div id="next9" onclick="showhide('div_10');"><a href="#next10">Weiter zur nächsten These »</a></div>
                </div>

               <div id="div_10" class="form">
                 <div class="col-11">
                 <label for="formcontent10" class="formcontent9"><a id="next10"></a></label></div>
                 <div id="innerspan"><span class="p2"><q>Die Mieten in der Stadt sollen in den nächsten 5 Jahren nicht erhöht werden dürfen.</q></span><br><p3>Frage 10/26</p3></span></div>
                  <div class="ph-11">
                  <div id="innerph">
                   <div id="plusplus10" onclick="plusplusfcn10()"><i class="far fa-grin-beam"></i></div>
                   <div id="plus10" onclick="plusfcn10()"><i class="far fa-smile"></i></div>
                   <div id="neutral10" onclick="neutralfcn10()"><i class="far fa-meh"></i></div>
                   <div id="minus10" onclick="minusfcn10()"><i class="far fa-frown"></i></div>
                   <div id="minusminus10" onclick="minusminusfcn10()"><i class="far fa-angry"></i></div></div>
                  </div>
                  <div id="next10" onclick="showhide('div_11');"><a href="#next11">Weiter zur nächsten These »</a></div>
                 </div>

               <div id="div_11" class="form">
                  <div class="col-12">
                  <label for="formcontent11" class="formcontent9"><a id="next11"></a></label></div>
                  <div id="innerspan"><span class="p2"><q>Dienstleistungen wie Ärzte oder Einkaufsmöglichkeiten sollen verstärkt in den Stadtteilen geplant werden.</q></span><br><p3>Frage 11/26</p3></span></div>
                   <div class="ph-12">
                   <div id="innerph">
                    <div id="plusplus11" onclick="plusplusfcn11()"><i class="far fa-grin-beam"></i></div>
                    <div id="plus11" onclick="plusfcn11()"><i class="far fa-smile"></i></div>
                    <div id="neutral11" onclick="neutralfcn11()"><i class="far fa-meh"></i></div>
                    <div id="minus11" onclick="minusfcn11()"><i class="far fa-frown"></i></div>
                    <div id="minusminus11" onclick="minusminusfcn11()"><i class="far fa-angry"></i></div></div>
                   </div>
                   <div id="next11" onclick="showhide('div_12');"><a href="#next12">Weiter zur nächsten These »</a></div>
                  </div>

               <div id="div_12" class="form">
                   <div class="col-13">
                   <label for="formcontent12" class="formcontent9"><a id="next12"></a></label></div>
                   <div id="innerspan"><span class="p2"><q>Neue Fahrradwege sollen nur gebaut werden, wenn dadurch keine Autospuren verloren gehen.</q></span><br><p3>Frage 12/26</p3></span></div>
                    <div class="ph-13">
                    <div id="innerph">
                     <div id="plusplus12" onclick="plusplusfcn12()"><i class="far fa-grin-beam"></i></div>
                     <div id="plus12" onclick="plusfcn12()"><i class="far fa-smile"></i></div>
                     <div id="neutral12" onclick="neutralfcn12()"><i class="far fa-meh"></i></div>
                     <div id="minus12" onclick="minusfcn12()"><i class="far fa-frown"></i></div>
                     <div id="minusminus12" onclick="minusminusfcn12()"><i class="far fa-angry"></i></div></div>
                    </div>
                    <div id="next12" onclick="showhide('div_13');"><a href="#next13">Weiter zur nächsten These »</a></div>
                   </div>

               <div id="div_13" class="form">
                    <div class="col-14">
                    <label for="formcontent13" class="formcontent9"><a id="next13"></a></label></div>
                    <div id="innerspan"><span class="p2"><q>Die Stadt soll sich dafür einsetzen, dass auch Menschen aus Nicht-EU-Staaten bei Kommunalwahlen wählen dürfen.</q></span><br><p3>Frage 13/26</p3></span></div>
                     <div class="ph-14">
                     <div id="innerph">
                      <div id="plusplus13" onclick="plusplusfcn13()"><i class="far fa-grin-beam"></i></div>
                      <div id="plus13" onclick="plusfcn13()"><i class="far fa-smile"></i></div>
                      <div id="neutral13" onclick="neutralfcn13()"><i class="far fa-meh"></i></div>
                      <div id="minus13" onclick="minusfcn13()"><i class="far fa-frown"></i></div>
                      <div id="minusminus13" onclick="minusminusfcn13()"><i class="far fa-angry"></i></div></div>
                     </div>
                     <div id="next13" onclick="showhide('div_14');"><a href="#next14">Weiter zur nächsten These »</a></div>
                    </div>

               <div id="div_14" class="form">
                     <div class="col-15">
                     <label for="formcontent14" class="formcontent9"><a id="next14"></a></label></div>
                     <div id="innerspan"><span class="p2"><q>Die Stadt soll so schnell wie möglich CO2-neutral werden.</q></span><br><p3>Frage 14/26</p3></span></div>
                      <div class="ph-15">
                      <div id="innerph">
                       <div id="plusplus14" onclick="plusplusfcn14()"><i class="far fa-grin-beam"></i></div>
                       <div id="plus14" onclick="plusfcn14()"><i class="far fa-smile"></i></div>
                       <div id="neutral14" onclick="neutralfcn14()"><i class="far fa-meh"></i></div>
                       <div id="minus14" onclick="minusfcn14()"><i class="far fa-frown"></i></div>
                       <div id="minusminus14" onclick="minusminusfcn14()"><i class="far fa-angry"></i></div></div>
                      </div>
                      <div id="next14" onclick="showhide('div_15');"><a href="#next15">Weiter zur nächsten These »</a></div>
                     </div>

               <div id="div_15" class="form">
                      <div class="col-16">
                      <label for="formcontent15" class="formcontent9"><a id="next15"></a></label></div>
                      <div id="innerspan"><span class="p2"><q>Das Essen in Schulen und Kitas soll für alle Kinder kostenlos sein.</q></span><br><p3>Frage 15/26</p3></span></div>
                       <div class="ph-16">
                       <div id="innerph">
                        <div id="plusplus15" onclick="plusplusfcn15()"><i class="far fa-grin-beam"></i></div>
                        <div id="plus15" onclick="plusfcn15()"><i class="far fa-smile"></i></div>
                        <div id="neutral15" onclick="neutralfcn15()"><i class="far fa-meh"></i></div>
                        <div id="minus15" onclick="minusfcn15()"><i class="far fa-frown"></i></div>
                        <div id="minusminus15" onclick="minusminusfcn15()"><i class="far fa-angry"></i></div></div>
                       </div>
                       <div id="next15" onclick="showhide('div_16');"><a href="#next16">Weiter zur nächsten These »</a></div>
                      </div>

               <div id="div_16" class="form">
                       <div class="col-17">
                       <label for="formcontent16" class="formcontent9"><a id="next16"></a></label></div>
                       <div id="innerspan"><span class="p2"><q>Es sollen weitere Windräder gebaut werden.</q></span><br><p3>Frage 16/26</p3></span></div>
                        <div class="ph-17">
                        <div id="innerph">
                         <div id="plusplus16" onclick="plusplusfcn16()"><i class="far fa-grin-beam"></i></div>
                         <div id="plus16" onclick="plusfcn16()"><i class="far fa-smile"></i></div>
                         <div id="neutral16" onclick="neutralfcn16()"><i class="far fa-meh"></i></div>
                         <div id="minus16" onclick="minusfcn16()"><i class="far fa-frown"></i></div>
                         <div id="minusminus16" onclick="minusminusfcn16()"><i class="far fa-angry"></i></div></div>
                        </div>
                        <div id="next16" onclick="showhide('div_17');"><a href="#next17">Weiter zur nächsten These »</a></div>
                       </div>

               <div id="div_17" class="form">
                        <div class="col-18">
                        <label for="formcontent17" class="formcontent9"><a id="next17"></a></label></div>
                        <div id="innerspan"><span class="p2"><q>Die Altstadt soll autofrei werden.</q></span><br><p3>Frage 17/26</p3></span></div>
                         <div class="ph-18">
                         <div id="innerph">
                          <div id="plusplus17" onclick="plusplusfcn17()"><i class="far fa-grin-beam"></i></div>
                          <div id="plus17" onclick="plusfcn17()"><i class="far fa-smile"></i></div>
                          <div id="neutral17" onclick="neutralfcn17()"><i class="far fa-meh"></i></div>
                          <div id="minus17" onclick="minusfcn17()"><i class="far fa-frown"></i></div>
                          <div id="minusminus17" onclick="minusminusfcn17()"><i class="far fa-angry"></i></div></div>
                         </div>
                         <div id="next17" onclick="showhide('div_18');"><a href="#next18">Weiter zur nächsten These »</a></div>
                        </div>

               <div id="div_18" class="form">
                         <div class="col-19">
                         <label for="formcontent18" class="formcontent9"><a id="next18"></a></label></div>
                         <div id="innerspan"><span class="p2"><q>In der Innenstadt sollen mehr Tempo-30-Zonen eingeführt werden.</q></span><br><p3>Frage 18/26</p3></span></div>
                          <div class="ph-19">
                          <div id="innerph">
                           <div id="plusplus18" onclick="plusplusfcn18()"><i class="far fa-grin-beam"></i></div>
                           <div id="plus18" onclick="plusfcn18()"><i class="far fa-smile"></i></div>
                           <div id="neutral18" onclick="neutralfcn18()"><i class="far fa-meh"></i></div>
                           <div id="minus18" onclick="minusfcn18()"><i class="far fa-frown"></i></div>
                           <div id="minusminus18" onclick="minusminusfcn18()"><i class="far fa-angry"></i></div></div>
                          </div>
                          <div id="next18" onclick="showhide('div_19');"><a href="#next19">Weiter zur nächsten These »</a></div>
                         </div>

               <div id="div_19" class="form">
                          <div class="col-20">
                          <label for="formcontent19" class="formcontent9"><a id="next19"></a></label></div>
                          <div id="innerspan"><span class="p2"><q>Die Stadt soll härter gegen Rechtsextremismus vorgehen.</q></span><br><p3>Frage 19/26</p3></span></div>
                           <div class="ph-20">
                           <div id="innerph">
                             <div id="plusplus19" onclick="plusplusfcn19()"><i class="far fa-grin-beam"></i></div>
                             <div id="plus19" onclick="plusfcn19()"><i class="far fa-grin-beam"></i></div>
                             <div id="neutral19" onclick="neutralfcn19()"><i class="far fa-grin-beam"></i></div>
                             <div id="minus19" onclick="minusfcn19()"><i class="far fa-grin-beam"></i></div>
                             <div id="minusminus19" onclick="minusminusfcn19()"><i class="far fa-grin-beam"></i></div></div>
                           </div>
                           <div id="next19" onclick="showhide('div_20');"><a href="#next20">Weiter zur nächsten These »</a></div>
                          </div>

               <div id="div_20" class="form">
                           <div class="col-21">
                           <label for="formcontent20" class="formcontent9"><a id="next20"></a></label></div>
                           <div id="innerspan"><span class="p2"><q>Zur Verbesserung der Sicherheit soll mehr Polizei auf der Straße eingesetzt werden.</q></span><br><p3>Frage 20/26</p3></span></div>
                            <div class="ph-21">
                            <div id="innerph">
                             <div id="plusplus20" onclick="plusplusfcn20()"><i class="far fa-grin-beam"></i></div>
                             <div id="plus20" onclick="plusfcn20()"><i class="far fa-smile"></i></div>
                             <div id="neutral20" onclick="neutralfcn20()"><i class="far fa-meh"></i></div>
                             <div id="minus20" onclick="minusfcn20()"><i class="far fa-frown"></i></div>
                             <div id="minusminus20" onclick="minusminusfcn20()"><i class="far fa-angry"></i></div></div>
                            </div>
                            <div id="next20" onclick="showhide('div_21');"><a href="#next21">Weiter zur nächsten These »</a></div>
                           </div>

               <div id="div_21" class="form">
                            <div class="col-22">
                            <label for="formcontent21" class="formcontent9"><a id="next21"></a></label></div>
                            <div id="innerspan"><span class="p2"><q>Die Videoüberwachung an öffentlichen Plätzen soll ausgeweitet werden.</q></span><br><p3>Frage 21/26</p3></span></div>
                             <div class="ph-22">
                             <div id="innerph">
                              <div id="plusplus21" onclick="plusplusfcn21()"><i class="far fa-grin-beam"></i></div>
                              <div id="plus21" onclick="plusfcn21()"><i class="far fa-smile"></i></div>
                              <div id="neutral21" onclick="neutralfcn21()"><i class="far fa-meh"></i></div>
                              <div id="minus21" onclick="minusfcn21()"><i class="far fa-frown"></i></div>
                              <div id="minusminus21" onclick="minusminusfcn21()"><i class="far fa-angry"></i></div></div>
                             </div>
                             <div id="next21" onclick="showhide('div_22');"><a href="#next22">Weiter zur nächsten These »</a></div>
                            </div>

               <div id="div_22" class="form">
                             <div class="col-23">
                             <label for="formcontent22" class="formcontent9"><a id="next22"></a></label></div>
                             <div id="innerspan"><span class="p2"><q>Die Parkgebühren in der Innenstadt sollen deutlich erhöht werden.</q></span><br><p3>Frage 22/26</p3></span></div>
                              <div class="ph-23">
                              <div id="innerph">
                               <div id="plusplus22" onclick="plusplusfcn22()"><i class="far fa-grin-beam"></i></div>
                               <div id="plus22" onclick="plusfcn22()"><i class="far fa-smile"></i></div>
                               <div id="neutral22" onclick="neutralfcn22()"><i class="far fa-meh"></i></div>
                               <div id="minus22" onclick="minusfcn22()"><i class="far fa-frown"></i></div>
                               <div id="minusminus22" onclick="minusminusfcn22()"><i class="far fa-angry"></i></div></div>
                              </div>
                              <div id="next22" onclick="showhide('div_23');"><a href="#next23">Weiter zur nächsten These »</a></div>
                             </div>

               <div id="div_23" class="form">
                              <div class="col-24">
                              <label for="formcontent23" class="formcontent9"><a id="next23"></a></label></div>
                              <div id="innerspan"><span class="p2"><q>Es sollen mehr Straßen in Fahrradstraßen (Velorouten) umgewandelt werden.</q></span><br><p3>Frage 23/26</p3></span></div>
                               <div class="ph-24">
                               <div id="innerph">
                                <div id="plusplus23" onclick="plusplusfcn23()"><i class="far fa-grin-beam"></i></div>
                                <div id="plus23" onclick="plusfcn23()"><i class="far fa-smile"></i></div>
                                <div id="neutral23" onclick="neutralfcn23()"><i class="far fa-meh"></i></div>
                                <div id="minus23" onclick="minusfcn23()"><i class="far fa-frown"></i></div>
                                <div id="minusminus23" onclick="minusminusfcn23()"><i class="far fa-angry"></i></div></div>
                               </div>
                               <div id="next23" onclick="showhide('div_24');"><a href="#next24">Weiter zur nächsten These »</a></div>
                              </div>

               <div id="div_24" class="form">
                               <div class="col-25">
                               <label for="formcontent24" class="formcontent9"><a id="next24"></a></label></div>
                               <div id="innerspan"><span class="p2"><q>Die Internetversorgung soll zur kommunalen Daseinsvorsorge erklärt werden.</q></span><br><p3>Frage 24/26</p3></span></div>
                                <div class="ph-25">
                                <div id="innerph">
                                 <div id="plusplus24" onclick="plusplusfcn24()"><i class="far fa-grin-beam"></i></div>
                                 <div id="plus24" onclick="plusfcn24()"><i class="far fa-smile"></i></div>
                                 <div id="neutral24" onclick="neutralfcn24()"><i class="far fa-meh"></i></div>
                                 <div id="minus24" onclick="minusfcn24()"><i class="far fa-frown"></i></div>
                                 <div id="minusminus24" onclick="minusminusfcn24()"><i class="far fa-angry"></i></div></div>
                                </div>
                                <div id="next24" onclick="showhide('div_25');"><a href="#next25">Weiter zur nächsten These »</a></div>
                               </div>

               <div id="div_25" class="form">
                                <div class="col-26">
                                <label for="formcontent25" class="formcontent9"><a id="next25"></a></label></div>
                                <div id="innerspan"><span class="p2"><q>Bei Neubauten soll ein höherer Anteil von Sozialwohnungen vorgeschrieben sein.</q></span><br><p3>Frage 25/26</p3></span></div>
                                 <div class="ph-26">
                                 <div id="innerph">
                                  <div id="plusplus25" onclick="plusplusfcn25()"><i class="far fa-grin-beam"></i></div>
                                  <div id="plus25" onclick="plusfcn25()"><i class="far fa-smile"></i></div>
                                  <div id="neutral25" onclick="neutralfcn25()"><i class="far fa-meh"></i></div>
                                  <div id="minus25" onclick="minusfcn25()"><i class="far fa-frown"></i></div>
                                  <div id="minusminus25" onclick="minusminusfcn25()"><i class="far fa-angry"></i></div></div>
                                 </div>
                                 <div id="next25" onclick="showhide('div_26');"><a href="#next26">Weiter zur nächsten These »</a></div>
                                </div>

               <div id="div_26" class="form">
                                 <div class="col-27">
                                 <label for="formcontent26" class="formcontent9"><a id="next26"></a></label></div>
                                 <div id="innerspan"><span class="p2"><q>Die Stadt soll mehr Geflüchtete aufnehmen.</q></span><br><p3>Frage 26/26</p3></span></div>
                                  <div class="ph-27">
                                  <div id="innerph">
                                   <div id="plusplus26" onclick="plusplusfcn26()"><i class="far fa-grin-beam"></i></div>
                                   <div id="plus26" onclick="plusfcn26()"><i class="far fa-smile"></i></div>
                                   <div id="neutral26" onclick="neutralfcn26()"><i class="far fa-meh"></i></div>
                                   <div id="minus26" onclick="minusfcn26()"><i class="far fa-frown"></i></div>
                                   <div id="minusminus26" onclick="minusminusfcn26()"><i class="far fa-angry"></i></div></div>
                                  </div>
                                  <div id="next26" onclick="showhide('showhideresult2');hideblock('questions')"><a href="#next27">Fragebogenauswerten</a></div>
                                 </div>

             </div>
    </div>
  </div>


    <script>
      function plusplusfcn() {
        document.getElementById("plusplus").style.background = "#55ff90";
        document.getElementById("plus").style.background = "#ccc";
        document.getElementById("neutral").style.background = "#ccc";
        document.getElementById("minus").style.background = "#ccc";
        document.getElementById("minusminus").style.background = "#ccc";
      }
      function plusfcn() {
        document.getElementById("plusplus").style.background = "#ccc";
        document.getElementById("plus").style.background = "#55ff90";
        document.getElementById("neutral").style.background = "#ccc";
        document.getElementById("minus").style.background = "#ccc";
        document.getElementById("minusminus").style.background = "#ccc";
      }
      function neutralfcn() {
        document.getElementById("plusplus").style.background = "#ccc";
        document.getElementById("plus").style.background = "#ccc";
        document.getElementById("neutral").style.background = "#fff455";
        document.getElementById("minus").style.background = "#ccc";
        document.getElementById("minusminus").style.background = "#ccc";
      }
      function minusfcn() {
        document.getElementById("plusplus").style.background = "#ccc";
        document.getElementById("plus").style.background = "#ccc";
        document.getElementById("neutral").style.background = "#ccc";
        document.getElementById("minus").style.background = "#f55";
        document.getElementById("minusminus").style.background = "#ccc";
      }
      function minusminusfcn() {
        document.getElementById("plusplus").style.background = "#ccc";
        document.getElementById("plus").style.background = "#ccc";
        document.getElementById("neutral").style.background = "#ccc";
        document.getElementById("minus").style.background = "#ccc";
        document.getElementById("minusminus").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn2() {
        document.getElementById("plusplus2").style.background = "#55ff90";
        document.getElementById("plus2").style.background = "#ccc";
        document.getElementById("neutral2").style.background = "#ccc";
        document.getElementById("minus2").style.background = "#ccc";
        document.getElementById("minusminus2").style.background = "#ccc";
      }
      function plusfcn2() {
        document.getElementById("plusplus2").style.background = "#ccc";
        document.getElementById("plus2").style.background = "#55ff90";
        document.getElementById("neutral2").style.background = "#ccc";
        document.getElementById("minus2").style.background = "#ccc";
        document.getElementById("minusminus2").style.background = "#ccc";
      }
      function neutralfcn2() {
        document.getElementById("plusplus2").style.background = "#ccc";
        document.getElementById("plus2").style.background = "#ccc";
        document.getElementById("neutral2").style.background = "#fff455";
        document.getElementById("minus2").style.background = "#ccc";
        document.getElementById("minusminus2").style.background = "#ccc";
      }
      function minusfcn2() {
        document.getElementById("plusplus2").style.background = "#ccc";
        document.getElementById("plus2").style.background = "#ccc";
        document.getElementById("neutral2").style.background = "#ccc";
        document.getElementById("minus2").style.background = "#f55";
        document.getElementById("minusminus2").style.background = "#ccc";
      }
      function minusminusfcn2() {
        document.getElementById("plusplus2").style.background = "#ccc";
        document.getElementById("plus2").style.background = "#ccc";
        document.getElementById("neutral2").style.background = "#ccc";
        document.getElementById("minus2").style.background = "#ccc";
        document.getElementById("minusminus2").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn3() {
        document.getElementById("plusplus3").style.background = "#55ff90";
        document.getElementById("plus3").style.background = "#ccc";
        document.getElementById("neutral3").style.background = "#ccc";
        document.getElementById("minus3").style.background = "#ccc";
        document.getElementById("minusminus3").style.background = "#ccc";
      }
      function plusfcn3() {
        document.getElementById("plusplus3").style.background = "#ccc";
        document.getElementById("plus3").style.background = "#55ff90";
        document.getElementById("neutral3").style.background = "#ccc";
        document.getElementById("minus3").style.background = "#ccc";
        document.getElementById("minusminus3").style.background = "#ccc";
      }
      function neutralfcn3() {
        document.getElementById("plusplus3").style.background = "#ccc";
        document.getElementById("plus3").style.background = "#ccc";
        document.getElementById("neutral3").style.background = "#fff455";
        document.getElementById("minus3").style.background = "#ccc";
        document.getElementById("minusminus3").style.background = "#ccc";
      }
      function minusfcn3() {
        document.getElementById("plusplus3").style.background = "#ccc";
        document.getElementById("plus3").style.background = "#ccc";
        document.getElementById("neutral3").style.background = "#ccc";
        document.getElementById("minus3").style.background = "#f55";
        document.getElementById("minusminus3").style.background = "#ccc";
      }
      function minusminusfcn3() {
        document.getElementById("plusplus3").style.background = "#ccc";
        document.getElementById("plus3").style.background = "#ccc";
        document.getElementById("neutral3").style.background = "#ccc";
        document.getElementById("minus3").style.background = "#ccc";
        document.getElementById("minusminus3").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn4() {
        document.getElementById("plusplus4").style.background = "#55ff90";
        document.getElementById("plus4").style.background = "#ccc";
        document.getElementById("neutral4").style.background = "#ccc";
        document.getElementById("minus4").style.background = "#ccc";
        document.getElementById("minusminus4").style.background = "#ccc";
      }
      function plusfcn4() {
        document.getElementById("plusplus4").style.background = "#ccc";
        document.getElementById("plus4").style.background = "#55ff90";
        document.getElementById("neutral4").style.background = "#ccc";
        document.getElementById("minus4").style.background = "#ccc";
        document.getElementById("minusminus4").style.background = "#ccc";
      }
      function neutralfcn4() {
        document.getElementById("plusplus4").style.background = "#ccc";
        document.getElementById("plus4").style.background = "#ccc";
        document.getElementById("neutral4").style.background = "#fff455";
        document.getElementById("minus4").style.background = "#ccc";
        document.getElementById("minusminus4").style.background = "#ccc";
      }
      function minusfcn4() {
        document.getElementById("plusplus4").style.background = "#ccc";
        document.getElementById("plus4").style.background = "#ccc";
        document.getElementById("neutral4").style.background = "#ccc";
        document.getElementById("minus4").style.background = "#f55";
        document.getElementById("minusminus4").style.background = "#ccc";
      }
      function minusminusfcn4() {
        document.getElementById("plusplus4").style.background = "#ccc";
        document.getElementById("plus4").style.background = "#ccc";
        document.getElementById("neutral4").style.background = "#ccc";
        document.getElementById("minus4").style.background = "#ccc";
        document.getElementById("minusminus4").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn5() {
        document.getElementById("plusplus5").style.background = "#55ff90";
        document.getElementById("plus5").style.background = "#ccc";
        document.getElementById("neutral5").style.background = "#ccc";
        document.getElementById("minus5").style.background = "#ccc";
        document.getElementById("minusminus5").style.background = "#ccc";
      }
      function plusfcn5() {
        document.getElementById("plusplus5").style.background = "#ccc";
        document.getElementById("plus5").style.background = "#55ff90";
        document.getElementById("neutral5").style.background = "#ccc";
        document.getElementById("minus5").style.background = "#ccc";
        document.getElementById("minusminus5").style.background = "#ccc";
      }
      function neutralfcn5() {
        document.getElementById("plusplus5").style.background = "#ccc";
        document.getElementById("plus5").style.background = "#ccc";
        document.getElementById("neutral5").style.background = "#fff455";
        document.getElementById("minus5").style.background = "#ccc";
        document.getElementById("minusminus5").style.background = "#ccc";
      }
      function minusfcn5() {
        document.getElementById("plusplus5").style.background = "#ccc";
        document.getElementById("plus5").style.background = "#ccc";
        document.getElementById("neutral5").style.background = "#ccc";
        document.getElementById("minus5").style.background = "#f55";
        document.getElementById("minusminus5").style.background = "#ccc";
      }
      function minusminusfcn5() {
        document.getElementById("plusplus5").style.background = "#ccc";
        document.getElementById("plus5").style.background = "#ccc";
        document.getElementById("neutral5").style.background = "#ccc";
        document.getElementById("minus5").style.background = "#ccc";
        document.getElementById("minusminus5").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn6() {
        document.getElementById("plusplus6").style.background = "#55ff90";
        document.getElementById("plus6").style.background = "#ccc";
        document.getElementById("neutral6").style.background = "#ccc";
        document.getElementById("minus6").style.background = "#ccc";
        document.getElementById("minusminus6").style.background = "#ccc";
      }
      function plusfcn6() {
        document.getElementById("plusplus6").style.background = "#ccc";
        document.getElementById("plus6").style.background = "#55ff90";
        document.getElementById("neutral6").style.background = "#ccc";
        document.getElementById("minus6").style.background = "#ccc";
        document.getElementById("minusminus6").style.background = "#ccc";
      }
      function neutralfcn6() {
        document.getElementById("plusplus6").style.background = "#ccc";
        document.getElementById("plus6").style.background = "#ccc";
        document.getElementById("neutral6").style.background = "#fff455";
        document.getElementById("minus6").style.background = "#ccc";
        document.getElementById("minusminus6").style.background = "#ccc";
      }
      function minusfcn6() {
        document.getElementById("plusplus6").style.background = "#ccc";
        document.getElementById("plus6").style.background = "#ccc";
        document.getElementById("neutral6").style.background = "#ccc";
        document.getElementById("minus6").style.background = "#f55";
        document.getElementById("minusminus6").style.background = "#ccc";
      }
      function minusminusfcn6() {
        document.getElementById("plusplus6").style.background = "#ccc";
        document.getElementById("plus6").style.background = "#ccc";
        document.getElementById("neutral6").style.background = "#ccc";
        document.getElementById("minus6").style.background = "#ccc";
        document.getElementById("minusminus6").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn7() {
        document.getElementById("plusplus7").style.background = "#55ff90";
        document.getElementById("plus7").style.background = "#ccc";
        document.getElementById("neutral7").style.background = "#ccc";
        document.getElementById("minus7").style.background = "#ccc";
        document.getElementById("minusminus7").style.background = "#ccc";
      }
      function plusfcn7() {
        document.getElementById("plusplus7").style.background = "#ccc";
        document.getElementById("plus7").style.background = "#55ff90";
        document.getElementById("neutral7").style.background = "#ccc";
        document.getElementById("minus7").style.background = "#ccc";
        document.getElementById("minusminus7").style.background = "#ccc";
      }
      function neutralfcn7() {
        document.getElementById("plusplus7").style.background = "#ccc";
        document.getElementById("plus7").style.background = "#ccc";
        document.getElementById("neutral7").style.background = "#fff455";
        document.getElementById("minus7").style.background = "#ccc";
        document.getElementById("minusminus7").style.background = "#ccc";
      }
      function minusfcn7() {
        document.getElementById("plusplus7").style.background = "#ccc";
        document.getElementById("plus7").style.background = "#ccc";
        document.getElementById("neutral7").style.background = "#ccc";
        document.getElementById("minus7").style.background = "#f55";
        document.getElementById("minusminus7").style.background = "#ccc";
      }
      function minusminusfcn7() {
        document.getElementById("plusplus7").style.background = "#ccc";
        document.getElementById("plus7").style.background = "#ccc";
        document.getElementById("neutral7").style.background = "#ccc";
        document.getElementById("minus7").style.background = "#ccc";
        document.getElementById("minusminus7").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn8() {
        document.getElementById("plusplus8").style.background = "#55ff90";
        document.getElementById("plus8").style.background = "#ccc";
        document.getElementById("neutral8").style.background = "#ccc";
        document.getElementById("minus8").style.background = "#ccc";
        document.getElementById("minusminus8").style.background = "#ccc";
      }
      function plusfcn8() {
        document.getElementById("plusplus8").style.background = "#ccc";
        document.getElementById("plus8").style.background = "#55ff90";
        document.getElementById("neutral8").style.background = "#ccc";
        document.getElementById("minus8").style.background = "#ccc";
        document.getElementById("minusminus8").style.background = "#ccc";
      }
      function neutralfcn8() {
        document.getElementById("plusplus8").style.background = "#ccc";
        document.getElementById("plus8").style.background = "#ccc";
        document.getElementById("neutral8").style.background = "#fff455";
        document.getElementById("minus8").style.background = "#ccc";
        document.getElementById("minusminus8").style.background = "#ccc";
      }
      function minusfcn8() {
        document.getElementById("plusplus8").style.background = "#ccc";
        document.getElementById("plus8").style.background = "#ccc";
        document.getElementById("neutral8").style.background = "#ccc";
        document.getElementById("minus8").style.background = "#f55";
        document.getElementById("minusminus8").style.background = "#ccc";
      }
      function minusminusfcn8() {
        document.getElementById("plusplus8").style.background = "#ccc";
        document.getElementById("plus8").style.background = "#ccc";
        document.getElementById("neutral8").style.background = "#ccc";
        document.getElementById("minus8").style.background = "#ccc";
        document.getElementById("minusminus8").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn9() {
        document.getElementById("plusplus9").style.background = "#55ff90";
        document.getElementById("plus9").style.background = "#ccc";
        document.getElementById("neutral9").style.background = "#ccc";
        document.getElementById("minus9").style.background = "#ccc";
        document.getElementById("minusminus9").style.background = "#ccc";
      }
      function plusfcn9() {
        document.getElementById("plusplus9").style.background = "#ccc";
        document.getElementById("plus9").style.background = "#55ff90";
        document.getElementById("neutral9").style.background = "#ccc";
        document.getElementById("minus9").style.background = "#ccc";
        document.getElementById("minusminus9").style.background = "#ccc";
      }
      function neutralfcn9() {
        document.getElementById("plusplus9").style.background = "#ccc";
        document.getElementById("plus9").style.background = "#ccc";
        document.getElementById("neutral9").style.background = "#fff455";
        document.getElementById("minus9").style.background = "#ccc";
        document.getElementById("minusminus9").style.background = "#ccc";
      }
      function minusfcn9() {
        document.getElementById("plusplus9").style.background = "#ccc";
        document.getElementById("plus9").style.background = "#ccc";
        document.getElementById("neutral9").style.background = "#ccc";
        document.getElementById("minus9").style.background = "#f55";
        document.getElementById("minusminus9").style.background = "#ccc";
      }
      function minusminusfcn9() {
        document.getElementById("plusplus9").style.background = "#ccc";
        document.getElementById("plus9").style.background = "#ccc";
        document.getElementById("neutral9").style.background = "#ccc";
        document.getElementById("minus9").style.background = "#ccc";
        document.getElementById("minusminus9").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn10() {
        document.getElementById("plusplus10").style.background = "#55ff90";
        document.getElementById("plus10").style.background = "#ccc";
        document.getElementById("neutral10").style.background = "#ccc";
        document.getElementById("minus10").style.background = "#ccc";
        document.getElementById("minusminus10").style.background = "#ccc";
      }
      function plusfcn10() {
        document.getElementById("plusplus10").style.background = "#ccc";
        document.getElementById("plus10").style.background = "#55ff90";
        document.getElementById("neutral10").style.background = "#ccc";
        document.getElementById("minus10").style.background = "#ccc";
        document.getElementById("minusminus10").style.background = "#ccc";
      }
      function neutralfcn10() {
        document.getElementById("plusplus10").style.background = "#ccc";
        document.getElementById("plus10").style.background = "#ccc";
        document.getElementById("neutral10").style.background = "#fff455";
        document.getElementById("minus10").style.background = "#ccc";
        document.getElementById("minusminus10").style.background = "#ccc";
      }
      function minusfcn10() {
        document.getElementById("plusplus10").style.background = "#ccc";
        document.getElementById("plus10").style.background = "#ccc";
        document.getElementById("neutral10").style.background = "#ccc";
        document.getElementById("minus10").style.background = "#f55";
        document.getElementById("minusminus10").style.background = "#ccc";
      }
      function minusminusfcn10() {
        document.getElementById("plusplus10").style.background = "#ccc";
        document.getElementById("plus10").style.background = "#ccc";
        document.getElementById("neutral10").style.background = "#ccc";
        document.getElementById("minus10").style.background = "#ccc";
        document.getElementById("minusminus10").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn11() {
        document.getElementById("plusplus11").style.background = "#55ff90";
        document.getElementById("plus11").style.background = "#ccc";
        document.getElementById("neutral11").style.background = "#ccc";
        document.getElementById("minus11").style.background = "#ccc";
        document.getElementById("minusminus11").style.background = "#ccc";
      }
      function plusfcn11() {
        document.getElementById("plusplus11").style.background = "#ccc";
        document.getElementById("plus11").style.background = "#55ff90";
        document.getElementById("neutral11").style.background = "#ccc";
        document.getElementById("minus11").style.background = "#ccc";
        document.getElementById("minusminus11").style.background = "#ccc";
      }
      function neutralfcn11() {
        document.getElementById("plusplus11").style.background = "#ccc";
        document.getElementById("plus11").style.background = "#ccc";
        document.getElementById("neutral11").style.background = "#fff455";
        document.getElementById("minus11").style.background = "#ccc";
        document.getElementById("minusminus11").style.background = "#ccc";
      }
      function minusfcn11() {
        document.getElementById("plusplus11").style.background = "#ccc";
        document.getElementById("plus11").style.background = "#ccc";
        document.getElementById("neutral11").style.background = "#ccc";
        document.getElementById("minus11").style.background = "#f55";
        document.getElementById("minusminus11").style.background = "#ccc";
      }
      function minusminusfcn11() {
        document.getElementById("plusplus11").style.background = "#ccc";
        document.getElementById("plus11").style.background = "#ccc";
        document.getElementById("neutral11").style.background = "#ccc";
        document.getElementById("minus11").style.background = "#ccc";
        document.getElementById("minusminus11").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn12() {
        document.getElementById("plusplus12").style.background = "#55ff90";
        document.getElementById("plus12").style.background = "#ccc";
        document.getElementById("neutral12").style.background = "#ccc";
        document.getElementById("minus12").style.background = "#ccc";
        document.getElementById("minusminus12").style.background = "#ccc";
      }
      function plusfcn12() {
        document.getElementById("plusplus12").style.background = "#ccc";
        document.getElementById("plus12").style.background = "#55ff90";
        document.getElementById("neutral12").style.background = "#ccc";
        document.getElementById("minus12").style.background = "#ccc";
        document.getElementById("minusminus12").style.background = "#ccc";
      }
      function neutralfcn12() {
        document.getElementById("plusplus12").style.background = "#ccc";
        document.getElementById("plus12").style.background = "#ccc";
        document.getElementById("neutral12").style.background = "#fff455";
        document.getElementById("minus12").style.background = "#ccc";
        document.getElementById("minusminus12").style.background = "#ccc";
      }
      function minusfcn12() {
        document.getElementById("plusplus12").style.background = "#ccc";
        document.getElementById("plus12").style.background = "#ccc";
        document.getElementById("neutral12").style.background = "#ccc";
        document.getElementById("minus12").style.background = "#f55";
        document.getElementById("minusminus12").style.background = "#ccc";
      }
      function minusminusfcn12() {
        document.getElementById("plusplus12").style.background = "#ccc";
        document.getElementById("plus12").style.background = "#ccc";
        document.getElementById("neutral12").style.background = "#ccc";
        document.getElementById("minus12").style.background = "#ccc";
        document.getElementById("minusminus12").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn13() {
        document.getElementById("plusplus13").style.background = "#55ff90";
        document.getElementById("plus13").style.background = "#ccc";
        document.getElementById("neutral13").style.background = "#ccc";
        document.getElementById("minus13").style.background = "#ccc";
        document.getElementById("minusminus13").style.background = "#ccc";
      }
      function plusfcn13() {
        document.getElementById("plusplus13").style.background = "#ccc";
        document.getElementById("plus13").style.background = "#55ff90";
        document.getElementById("neutral13").style.background = "#ccc";
        document.getElementById("minus13").style.background = "#ccc";
        document.getElementById("minusminus13").style.background = "#ccc";
      }
      function neutralfcn13() {
        document.getElementById("plusplus13").style.background = "#ccc";
        document.getElementById("plus13").style.background = "#ccc";
        document.getElementById("neutral13").style.background = "#fff455";
        document.getElementById("minus13").style.background = "#ccc";
        document.getElementById("minusminus13").style.background = "#ccc";
      }
      function minusfcn13() {
        document.getElementById("plusplus13").style.background = "#ccc";
        document.getElementById("plus13").style.background = "#ccc";
        document.getElementById("neutral13").style.background = "#ccc";
        document.getElementById("minus13").style.background = "#f55";
        document.getElementById("minusminus13").style.background = "#ccc";
      }
      function minusminusfcn13() {
        document.getElementById("plusplus13").style.background = "#ccc";
        document.getElementById("plus13").style.background = "#ccc";
        document.getElementById("neutral13").style.background = "#ccc";
        document.getElementById("minus13").style.background = "#ccc";
        document.getElementById("minusminus13").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn14() {
        document.getElementById("plusplus14").style.background = "#55ff90";
        document.getElementById("plus14").style.background = "#ccc";
        document.getElementById("neutral14").style.background = "#ccc";
        document.getElementById("minus14").style.background = "#ccc";
        document.getElementById("minusminus14").style.background = "#ccc";
      }
      function plusfcn14() {
        document.getElementById("plusplus14").style.background = "#ccc";
        document.getElementById("plus14").style.background = "#55ff90";
        document.getElementById("neutral14").style.background = "#ccc";
        document.getElementById("minus14").style.background = "#ccc";
        document.getElementById("minusminus14").style.background = "#ccc";
      }
      function neutralfcn14() {
        document.getElementById("plusplus14").style.background = "#ccc";
        document.getElementById("plus14").style.background = "#ccc";
        document.getElementById("neutral14").style.background = "#fff455";
        document.getElementById("minus14").style.background = "#ccc";
        document.getElementById("minusminus14").style.background = "#ccc";
      }
      function minusfcn14() {
        document.getElementById("plusplus14").style.background = "#ccc";
        document.getElementById("plus14").style.background = "#ccc";
        document.getElementById("neutral14").style.background = "#ccc";
        document.getElementById("minus14").style.background = "#f55";
        document.getElementById("minusminus14").style.background = "#ccc";
      }
      function minusminusfcn14() {
        document.getElementById("plusplus14").style.background = "#ccc";
        document.getElementById("plus14").style.background = "#ccc";
        document.getElementById("neutral14").style.background = "#ccc";
        document.getElementById("minus14").style.background = "#ccc";
        document.getElementById("minusminus14").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn15() {
        document.getElementById("plusplus15").style.background = "#55ff90";
        document.getElementById("plus15").style.background = "#ccc";
        document.getElementById("neutral15").style.background = "#ccc";
        document.getElementById("minus15").style.background = "#ccc";
        document.getElementById("minusminus15").style.background = "#ccc";
      }
      function plusfcn15() {
        document.getElementById("plusplus15").style.background = "#ccc";
        document.getElementById("plus15").style.background = "#55ff90";
        document.getElementById("neutral15").style.background = "#ccc";
        document.getElementById("minus15").style.background = "#ccc";
        document.getElementById("minusminus15").style.background = "#ccc";
      }
      function neutralfcn15() {
        document.getElementById("plusplus15").style.background = "#ccc";
        document.getElementById("plus15").style.background = "#ccc";
        document.getElementById("neutral15").style.background = "#fff455";
        document.getElementById("minus15").style.background = "#ccc";
        document.getElementById("minusminus15").style.background = "#ccc";
      }
      function minusfcn15() {
        document.getElementById("plusplus15").style.background = "#ccc";
        document.getElementById("plus15").style.background = "#ccc";
        document.getElementById("neutral15").style.background = "#ccc";
        document.getElementById("minus15").style.background = "#f55";
        document.getElementById("minusminus15").style.background = "#ccc";
      }
      function minusminusfcn15() {
        document.getElementById("plusplus15").style.background = "#ccc";
        document.getElementById("plus15").style.background = "#ccc";
        document.getElementById("neutral15").style.background = "#ccc";
        document.getElementById("minus15").style.background = "#ccc";
        document.getElementById("minusminus15").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn16() {
        document.getElementById("plusplus16").style.background = "#55ff90";
        document.getElementById("plus16").style.background = "#ccc";
        document.getElementById("neutral16").style.background = "#ccc";
        document.getElementById("minus16").style.background = "#ccc";
        document.getElementById("minusminus16").style.background = "#ccc";
      }
      function plusfcn16() {
        document.getElementById("plusplus16").style.background = "#ccc";
        document.getElementById("plus16").style.background = "#55ff90";
        document.getElementById("neutral16").style.background = "#ccc";
        document.getElementById("minus16").style.background = "#ccc";
        document.getElementById("minusminus16").style.background = "#ccc";
      }
      function neutralfcn16() {
        document.getElementById("plusplus16").style.background = "#ccc";
        document.getElementById("plus16").style.background = "#ccc";
        document.getElementById("neutral16").style.background = "#fff455";
        document.getElementById("minus16").style.background = "#ccc";
        document.getElementById("minusminus16").style.background = "#ccc";
      }
      function minusfcn16() {
        document.getElementById("plusplus16").style.background = "#ccc";
        document.getElementById("plus16").style.background = "#ccc";
        document.getElementById("neutral16").style.background = "#ccc";
        document.getElementById("minus16").style.background = "#f55";
        document.getElementById("minusminus16").style.background = "#ccc";
      }
      function minusminusfcn16() {
        document.getElementById("plusplus16").style.background = "#ccc";
        document.getElementById("plus16").style.background = "#ccc";
        document.getElementById("neutral16").style.background = "#ccc";
        document.getElementById("minus16").style.background = "#ccc";
        document.getElementById("minusminus16").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn17() {
        document.getElementById("plusplus17").style.background = "#55ff90";
        document.getElementById("plus17").style.background = "#ccc";
        document.getElementById("neutral17").style.background = "#ccc";
        document.getElementById("minus17").style.background = "#ccc";
        document.getElementById("minusminus17").style.background = "#ccc";
      }
      function plusfcn17() {
        document.getElementById("plusplus17").style.background = "#ccc";
        document.getElementById("plus17").style.background = "#55ff90";
        document.getElementById("neutral17").style.background = "#ccc";
        document.getElementById("minus17").style.background = "#ccc";
        document.getElementById("minusminus17").style.background = "#ccc";
      }
      function neutralfcn17() {
        document.getElementById("plusplus17").style.background = "#ccc";
        document.getElementById("plus17").style.background = "#ccc";
        document.getElementById("neutral17").style.background = "#fff455";
        document.getElementById("minus17").style.background = "#ccc";
        document.getElementById("minusminus17").style.background = "#ccc";
      }
      function minusfcn17() {
        document.getElementById("plusplus17").style.background = "#ccc";
        document.getElementById("plus17").style.background = "#ccc";
        document.getElementById("neutral17").style.background = "#ccc";
        document.getElementById("minus17").style.background = "#f55";
        document.getElementById("minusminus17").style.background = "#ccc";
      }
      function minusminusfcn17() {
        document.getElementById("plusplus17").style.background = "#ccc";
        document.getElementById("plus17").style.background = "#ccc";
        document.getElementById("neutral17").style.background = "#ccc";
        document.getElementById("minus17").style.background = "#ccc";
        document.getElementById("minusminus17").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn18() {
        document.getElementById("plusplus18").style.background = "#55ff90";
        document.getElementById("plus18").style.background = "#ccc";
        document.getElementById("neutral18").style.background = "#ccc";
        document.getElementById("minus18").style.background = "#ccc";
        document.getElementById("minusminus18").style.background = "#ccc";
      }
      function plusfcn18() {
        document.getElementById("plusplus18").style.background = "#ccc";
        document.getElementById("plus18").style.background = "#55ff90";
        document.getElementById("neutral18").style.background = "#ccc";
        document.getElementById("minus18").style.background = "#ccc";
        document.getElementById("minusminus18").style.background = "#ccc";
      }
      function neutralfcn18() {
        document.getElementById("plusplus18").style.background = "#ccc";
        document.getElementById("plus18").style.background = "#ccc";
        document.getElementById("neutral18").style.background = "#fff455";
        document.getElementById("minus18").style.background = "#ccc";
        document.getElementById("minusminus18").style.background = "#ccc";
      }
      function minusfcn18() {
        document.getElementById("plusplus18").style.background = "#ccc";
        document.getElementById("plus18").style.background = "#ccc";
        document.getElementById("neutral18").style.background = "#ccc";
        document.getElementById("minus18").style.background = "#f55";
        document.getElementById("minusminus18").style.background = "#ccc";
      }
      function minusminusfcn18() {
        document.getElementById("plusplus18").style.background = "#ccc";
        document.getElementById("plus18").style.background = "#ccc";
        document.getElementById("neutral18").style.background = "#ccc";
        document.getElementById("minus18").style.background = "#ccc";
        document.getElementById("minusminus18").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn19() {
        document.getElementById("plusplus19").style.background = "#55ff90";
        document.getElementById("plus19").style.background = "#55ff90";
        document.getElementById("neutral19").style.background = "#55ff90";
        document.getElementById("minus19").style.background = "#55ff90";
        document.getElementById("minusminus19").style.background = "#55ff90";
      }
      function plusfcn19() {
        document.getElementById("plusplus19").style.background = "#55ff90";
        document.getElementById("plus19").style.background = "#55ff90";
        document.getElementById("neutral19").style.background = "#55ff90";
        document.getElementById("minus19").style.background = "#55ff90";
        document.getElementById("minusminus19").style.background = "#55ff90";
      }
      function neutralfcn19() {
        document.getElementById("plusplus19").style.background = "#55ff90";
        document.getElementById("plus19").style.background = "#55ff90";
        document.getElementById("neutral19").style.background = "#55ff90";
        document.getElementById("minus19").style.background = "#55ff90";
        document.getElementById("minusminus19").style.background = "#55ff90";
      }
      function minusfcn19() {
        document.getElementById("plusplus19").style.background = "#55ff90";
        document.getElementById("plus19").style.background = "#55ff90";
        document.getElementById("neutral19").style.background = "#55ff90";
        document.getElementById("minus19").style.background = "#55ff90";
        document.getElementById("minusminus19").style.background = "#55ff90";
      }
      function minusminusfcn19() {
        document.getElementById("plusplus19").style.background = "#55ff90";
        document.getElementById("plus19").style.background = "#55ff90";
        document.getElementById("neutral19").style.background = "#55ff90";
        document.getElementById("minus19").style.background = "#55ff90";
        document.getElementById("minusminus19").style.background = "#55ff90";
      }
    </script>
    <script>
      function plusplusfcn20() {
        document.getElementById("plusplus20").style.background = "#55ff90";
        document.getElementById("plus20").style.background = "#ccc";
        document.getElementById("neutral20").style.background = "#ccc";
        document.getElementById("minus20").style.background = "#ccc";
        document.getElementById("minusminus20").style.background = "#ccc";
      }
      function plusfcn20() {
        document.getElementById("plusplus20").style.background = "#ccc";
        document.getElementById("plus20").style.background = "#55ff90";
        document.getElementById("neutral20").style.background = "#ccc";
        document.getElementById("minus20").style.background = "#ccc";
        document.getElementById("minusminus20").style.background = "#ccc";
      }
      function neutralfcn20() {
        document.getElementById("plusplus20").style.background = "#ccc";
        document.getElementById("plus20").style.background = "#ccc";
        document.getElementById("neutral20").style.background = "#fff455";
        document.getElementById("minus20").style.background = "#ccc";
        document.getElementById("minusminus20").style.background = "#ccc";
      }
      function minusfcn20() {
        document.getElementById("plusplus20").style.background = "#ccc";
        document.getElementById("plus20").style.background = "#ccc";
        document.getElementById("neutral20").style.background = "#ccc";
        document.getElementById("minus20").style.background = "#f55";
        document.getElementById("minusminus20").style.background = "#ccc";
      }
      function minusminusfcn20() {
        document.getElementById("plusplus20").style.background = "#ccc";
        document.getElementById("plus20").style.background = "#ccc";
        document.getElementById("neutral20").style.background = "#ccc";
        document.getElementById("minus20").style.background = "#ccc";
        document.getElementById("minusminus20").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn21() {
        document.getElementById("plusplus21").style.background = "#55ff90";
        document.getElementById("plus21").style.background = "#ccc";
        document.getElementById("neutral21").style.background = "#ccc";
        document.getElementById("minus21").style.background = "#ccc";
        document.getElementById("minusminus21").style.background = "#ccc";
      }
      function plusfcn21() {
        document.getElementById("plusplus21").style.background = "#ccc";
        document.getElementById("plus21").style.background = "#55ff90";
        document.getElementById("neutral21").style.background = "#ccc";
        document.getElementById("minus21").style.background = "#ccc";
        document.getElementById("minusminus21").style.background = "#ccc";
      }
      function neutralfcn21() {
        document.getElementById("plusplus21").style.background = "#ccc";
        document.getElementById("plus21").style.background = "#ccc";
        document.getElementById("neutral21").style.background = "#fff455";
        document.getElementById("minus21").style.background = "#ccc";
        document.getElementById("minusminus21").style.background = "#ccc";
      }
      function minusfcn21() {
        document.getElementById("plusplus21").style.background = "#ccc";
        document.getElementById("plus21").style.background = "#ccc";
        document.getElementById("neutral21").style.background = "#ccc";
        document.getElementById("minus21").style.background = "#f55";
        document.getElementById("minusminus21").style.background = "#ccc";
      }
      function minusminusfcn21() {
        document.getElementById("plusplus21").style.background = "#ccc";
        document.getElementById("plus21").style.background = "#ccc";
        document.getElementById("neutral21").style.background = "#ccc";
        document.getElementById("minus21").style.background = "#ccc";
        document.getElementById("minusminus21").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn22() {
        document.getElementById("plusplus22").style.background = "#55ff90";
        document.getElementById("plus22").style.background = "#ccc";
        document.getElementById("neutral22").style.background = "#ccc";
        document.getElementById("minus22").style.background = "#ccc";
        document.getElementById("minusminus22").style.background = "#ccc";
      }
      function plusfcn22() {
        document.getElementById("plusplus22").style.background = "#ccc";
        document.getElementById("plus22").style.background = "#55ff90";
        document.getElementById("neutral22").style.background = "#ccc";
        document.getElementById("minus22").style.background = "#ccc";
        document.getElementById("minusminus22").style.background = "#ccc";
      }
      function neutralfcn22() {
        document.getElementById("plusplus22").style.background = "#ccc";
        document.getElementById("plus22").style.background = "#ccc";
        document.getElementById("neutral22").style.background = "#fff455";
        document.getElementById("minus22").style.background = "#ccc";
        document.getElementById("minusminus22").style.background = "#ccc";
      }
      function minusfcn22() {
        document.getElementById("plusplus22").style.background = "#ccc";
        document.getElementById("plus22").style.background = "#ccc";
        document.getElementById("neutral22").style.background = "#ccc";
        document.getElementById("minus22").style.background = "#f55";
        document.getElementById("minusminus22").style.background = "#ccc";
      }
      function minusminusfcn22() {
        document.getElementById("plusplus22").style.background = "#ccc";
        document.getElementById("plus22").style.background = "#ccc";
        document.getElementById("neutral22").style.background = "#ccc";
        document.getElementById("minus22").style.background = "#ccc";
        document.getElementById("minusminus22").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn23() {
        document.getElementById("plusplus23").style.background = "#55ff90";
        document.getElementById("plus23").style.background = "#ccc";
        document.getElementById("neutral23").style.background = "#ccc";
        document.getElementById("minus23").style.background = "#ccc";
        document.getElementById("minusminus23").style.background = "#ccc";
      }
      function plusfcn23() {
        document.getElementById("plusplus23").style.background = "#ccc";
        document.getElementById("plus23").style.background = "#55ff90";
        document.getElementById("neutral23").style.background = "#ccc";
        document.getElementById("minus23").style.background = "#ccc";
        document.getElementById("minusminus23").style.background = "#ccc";
      }
      function neutralfcn23() {
        document.getElementById("plusplus23").style.background = "#ccc";
        document.getElementById("plus23").style.background = "#ccc";
        document.getElementById("neutral23").style.background = "#fff455";
        document.getElementById("minus23").style.background = "#ccc";
        document.getElementById("minusminus23").style.background = "#ccc";
      }
      function minusfcn23() {
        document.getElementById("plusplus23").style.background = "#ccc";
        document.getElementById("plus23").style.background = "#ccc";
        document.getElementById("neutral23").style.background = "#ccc";
        document.getElementById("minus23").style.background = "#f55";
        document.getElementById("minusminus23").style.background = "#ccc";
      }
      function minusminusfcn23() {
        document.getElementById("plusplus23").style.background = "#ccc";
        document.getElementById("plus23").style.background = "#ccc";
        document.getElementById("neutral23").style.background = "#ccc";
        document.getElementById("minus23").style.background = "#ccc";
        document.getElementById("minusminus23").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn24() {
        document.getElementById("plusplus24").style.background = "#55ff90";
        document.getElementById("plus24").style.background = "#ccc";
        document.getElementById("neutral24").style.background = "#ccc";
        document.getElementById("minus24").style.background = "#ccc";
        document.getElementById("minusminus24").style.background = "#ccc";
      }
      function plusfcn24() {
        document.getElementById("plusplus24").style.background = "#ccc";
        document.getElementById("plus24").style.background = "#55ff90";
        document.getElementById("neutral24").style.background = "#ccc";
        document.getElementById("minus24").style.background = "#ccc";
        document.getElementById("minusminus24").style.background = "#ccc";
      }
      function neutralfcn24() {
        document.getElementById("plusplus24").style.background = "#ccc";
        document.getElementById("plus24").style.background = "#ccc";
        document.getElementById("neutral24").style.background = "#fff455";
        document.getElementById("minus24").style.background = "#ccc";
        document.getElementById("minusminus24").style.background = "#ccc";
      }
      function minusfcn24() {
        document.getElementById("plusplus24").style.background = "#ccc";
        document.getElementById("plus24").style.background = "#ccc";
        document.getElementById("neutral24").style.background = "#ccc";
        document.getElementById("minus24").style.background = "#f55";
        document.getElementById("minusminus24").style.background = "#ccc";
      }
      function minusminusfcn24() {
        document.getElementById("plusplus24").style.background = "#ccc";
        document.getElementById("plus24").style.background = "#ccc";
        document.getElementById("neutral24").style.background = "#ccc";
        document.getElementById("minus24").style.background = "#ccc";
        document.getElementById("minusminus24").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn25() {
        document.getElementById("plusplus25").style.background = "#55ff90";
        document.getElementById("plus25").style.background = "#ccc";
        document.getElementById("neutral25").style.background = "#ccc";
        document.getElementById("minus25").style.background = "#ccc";
        document.getElementById("minusminus25").style.background = "#ccc";
      }
      function plusfcn25() {
        document.getElementById("plusplus25").style.background = "#ccc";
        document.getElementById("plus25").style.background = "#55ff90";
        document.getElementById("neutral25").style.background = "#ccc";
        document.getElementById("minus25").style.background = "#ccc";
        document.getElementById("minusminus25").style.background = "#ccc";
      }
      function neutralfcn25() {
        document.getElementById("plusplus25").style.background = "#ccc";
        document.getElementById("plus25").style.background = "#ccc";
        document.getElementById("neutral25").style.background = "#fff455";
        document.getElementById("minus25").style.background = "#ccc";
        document.getElementById("minusminus25").style.background = "#ccc";
      }
      function minusfcn25() {
        document.getElementById("plusplus25").style.background = "#ccc";
        document.getElementById("plus25").style.background = "#ccc";
        document.getElementById("neutral25").style.background = "#ccc";
        document.getElementById("minus25").style.background = "#f55";
        document.getElementById("minusminus25").style.background = "#ccc";
      }
      function minusminusfcn25() {
        document.getElementById("plusplus25").style.background = "#ccc";
        document.getElementById("plus25").style.background = "#ccc";
        document.getElementById("neutral25").style.background = "#ccc";
        document.getElementById("minus25").style.background = "#ccc";
        document.getElementById("minusminus25").style.background = "#f55";
      }
    </script>
    <script>
      function plusplusfcn26() {
        document.getElementById("plusplus26").style.background = "#55ff90";
        document.getElementById("plus26").style.background = "#ccc";
        document.getElementById("neutral26").style.background = "#ccc";
        document.getElementById("minus26").style.background = "#ccc";
        document.getElementById("minusminus26").style.background = "#ccc";
      }
      function plusfcn26() {
        document.getElementById("plusplus26").style.background = "#ccc";
        document.getElementById("plus26").style.background = "#55ff90";
        document.getElementById("neutral26").style.background = "#ccc";
        document.getElementById("minus26").style.background = "#ccc";
        document.getElementById("minusminus26").style.background = "#ccc";
      }
      function neutralfcn26() {
        document.getElementById("plusplus26").style.background = "#ccc";
        document.getElementById("plus26").style.background = "#ccc";
        document.getElementById("neutral26").style.background = "#fff455";
        document.getElementById("minus26").style.background = "#ccc";
        document.getElementById("minusminus26").style.background = "#ccc";
      }
      function minusfcn26() {
        document.getElementById("plusplus26").style.background = "#ccc";
        document.getElementById("plus26").style.background = "#ccc";
        document.getElementById("neutral26").style.background = "#ccc";
        document.getElementById("minus26").style.background = "#f55";
        document.getElementById("minusminus26").style.background = "#ccc";
      }
      function minusminusfcn26() {
        document.getElementById("plusplus26").style.background = "#ccc";
        document.getElementById("plus26").style.background = "#ccc";
        document.getElementById("neutral26").style.background = "#ccc";
        document.getElementById("minus26").style.background = "#ccc";
        document.getElementById("minusminus26").style.background = "#f55";
      }
    </script>

<div id='showhideresult2'>
  <div id='resultody'>
    <a id="next27"></a>
    <div id='head'>
    <h2>Dein Ergebnis</h2>
    <p> Glückwunsch. Dein Ergebnis ist sehr gut. Die Auswertung der Thesen hat ergeben, dass du uns deine Stimme geben wirst, da du unser Wahlprogramm verinnerlicht hast und somit nur mit uns Glücklich wirst. Du bist auch zu gleich der Meinung, dass die Schnuller-Nazis der FCKAFD und Nazi Partei Deutschlands, nur ein Poop-Emoji verdienen.  </p>
    </div>

    <script>
    $(document).ready(function(){
        $('#result_partei').css({'width' : (document.getElementById("result_partei").innerHTML =
     (Math.ceil(Math.random() * 5 + 95) + '%')) })
    });
    $(document).ready(function(){
        $('#result_spd').css({'width' : (document.getElementById("result_spd").innerHTML =
     (Math.ceil(Math.random() * 30 + 20) + '%')) })
    });
      $(document).ready(function(){
          $('#result_linke').css({'width' : (document.getElementById("result_linke").innerHTML =
       (Math.ceil(Math.random() * 50 + 24)+ '%')) })
      });
      $(document).ready(function(){
          $('#result_gruen').css({'width' : (document.getElementById("result_gruen").innerHTML =
       (Math.ceil(Math.random() * 50 + 24)+ '%')) })
      });
      $(document).ready(function(){
          $('#result_cdu').css({'width' : (document.getElementById("result_cdu").innerHTML =
       (Math.ceil(Math.random() * 10 + 20)+ '%')) })
      });
    </script>

    <div id='result-table'>

      <div id='resultbar'>
        <div id='result_textbox'>PARTEI
        </div>
        <div id='result_partei'>
        </div>
      </div>

      <div id='resultbar'>
        <div id='result_textbox'>sPD
        </div>
        <div id='result_spd'>
        </div>
      </div>

      <div id='resultbar'>
        <div id='result_textbox'>"LINKE"
        </div>
        <div id='result_linke'>
        </div>
      </div>

      <div id='resultbar'>
        <div id='result_textbox'>"GRÜNE"
        </div>
        <div id='result_gruen'>
        </div>
      </div>

      <div id='resultbar'>
        <div id='result_textbox'>cdU
        </div>
        <div id='result_cdu'><a></a>
        </div>
      </div>

      <div id='resultbar-nazis'>
        <div id='result_npd'><a>Nazis der NPD</a><a2>💩</a2>
        </div>
      </div>

      <div id='resultbar-nazis'>
        <div id='result_afd'><a>Nazis der FCKAFD</a><a2>💩</a2>
        </div>
      </div>

      </div>
    </div>
</div>

    <div id="footer">
      <span id="info"> Wähle ein Thema aus dem Menü oben aus und schlage vor, was wir politisch umsetzen sollen.
      Wenn du zu allen Themen, zu denen wir Politik machen sollen, etwas eingetragen hast,
      validiere dich mit deiner E-Mail und dem reCaptcha, dass du kein Bot oder eine weltvernichtende Maschine bist.</span>
    <a href="https://partei-ldk.de/impressum/"> Datenschutzerklärung und Impressum</div></div>
  </body>
</html>
