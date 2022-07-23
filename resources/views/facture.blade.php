<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href={{ asset('assets/css/facture.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/bootstrap-theme.css') }}>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
        </x-slot>
        
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <style>
                                .Style7 {
                                    font-size: 12px
                                }

                                

                            </style>


                            @foreach ($facturations as $facture)

                            @endforeach
                            <table class="tab1">

                                <tr>

                                    <td class="td1" >
                                        <div class="div1" ><img src={{ asset('assets/images/logo_bilingue.jpg') }} class="img1" /></div>
                                    </td>

                                </tr>

                                <tr>

                                    <td>
                                        <table class="tab1">

                                            <tr>

                                                <td width="740">
                                                    <table class="tab1">

                                                        <tr>

                                                            <td width="348">
                                                                <table class="tab2">

                                                                    <tr>

                                                                        <td >
                                                                            <div >

                                                                                <div class="style9">

                                                                                    <p>
                                                                                        {{ $facture->reference }}
                                                                                    </p>

                                                                                    <p class="Style9">

                                                                                        MR {{  $facture->nom }} {{ $facture->prenom }},
                                                                                        {{ $facture->adresse }}
                                                                                        <br />

                                                                                        <br />

                                                                                    </p>

                                                                                </div>

                                                                            </div>
                                                                        </td>

                                                                    </tr>

                                                                </table>
                                                            </td>


                                                            <td width="4">&nbsp;</td>

                                                            <td >
                                                                <table class="tab2">

                                                                    <tr>

                                                                        <td width="311" bgcolor="#ECF7FB">
                                                                            <div align="center">

                                                                                <p class="texte4"><img
                                                                                        src={{ asset('assets/images/facture2.jpg') }}
                                                                                        width="227" height="30" /></p>

                                                                                <p class="texte4">

                                                                                    FACTURE
                                                                                    <br />

                                                                                    du
                                                                                    {{ $facture->periodedebut }}
                                                                                    au
                                                                                    {{ $facture->periodefin }}
                                                                                    <br />


                                                                                </p>

                                                                            </div>
                                                                        </td>

                                                                    </tr>

                                                                </table>
                                                            </td>

                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr valign="middle" height="25px">
                                    <td colspan="3">
                                        &nbsp;
                                        <div class="Style9">
                                            <div align="right" class="entete_facture" style="font-size:18px; background-color:#ECF7FB">Consommation / الاستهلاك</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div align="left">
                                            <table width="800" border="1" cellspacing="0" cellpadding="0" bordercolor="#97CCE6" >
                                                <tr valign="top">
                                                    <td width="82" rowspan="2" valign="middle" bgcolor="#CCFFFF"" class="texte4">
                                                        <div align="center" class="entete_facture">المجموع<br />
                                                        TOTAL
                                                        </div>
                                                    </td>
                                                    <td width="80" rowspan="2" align="right" valign="middle" bgcolor="#CCFFFF" class="texte4">
                                                        <div align="center" class="entete_facture">
                                                            <p>المعاليم القارة<br />
                                                            Red. Fixes </p>
                                                        </div>
                                                    </td>
                                                    <td width="100" rowspan="2" align="right" valign="middle" bgcolor="#CCFFFF" class="texte4">
                                                        <div align="center" class="entete_facture">المبلغ<br />
                                                            Montant 
                                                        </div>
                                                    </td>
                                                    <td width="65" rowspan="2" align="right" valign="middle" bgcolor="#CCFFFF" class="texte4">
                                                        <div align="center" class="entete_facture">السعر<br />
                                                            P.U.
                                                        </div>
                                                    </td>
                                                    <td width="100" rowspan="2" align="right" valign="middle" bgcolor="#CCFFFF" class="texte4">
                                                        <div align="center" class="entete_facture">الإستهلاك<br />
                                                            Consom.
                                                        </div>
                                                    </td>
                                                    <td colspan="2" align="right" valign="middle" bgcolor="#CCFFFF" class="texte4">
                                                        <div align="center" class="entete_facture"> Index &nbsp;&nbsp;&nbsp;الرقم </div>
                                                    </td>
                                                    <td width="60" rowspan="2" align="right" valign="middle" bgcolor="#CCFFFF" class="texte4">
                                                        <div align="center" class="entete_facture">عدد الأشهر <br />Nbre. Mois</div>
                                                    </td>
                                                    <td width="125" rowspan="2" align="right" valign="middle" bgcolor="#CCFFFF" class="texte4">
                                                        <div align="center" class="entete_facture">الـبيـانــات<br />LIBELLE</div>
                                                    </td>
                                                </tr>
                                                <tr valign="top">
                                                    <td width="70" align="right" valign="middle" bgcolor="#ECF7FB" class="texte4">
                                                        <div align="center" class="Style9"><span class="entete_facture">Ancien</span>القديم</div>
                                                    </td>
                                                    <td width="67" align="right" valign="middle" bgcolor="#ECF7FB" class="texte4">
                                                        <div align="center" class="Style9"><span class="entete_facture">Nouv. </span> الجديد</div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                    
                                  <td colspan="3"><table width="800" border="0" cellspacing="0" cellpadding="0" bordercolor="#97CCE6" >
                    
                                      
                                      <tr valign="top" bgcolor="#FFF" height="20px" style=" background-color:#FFF">
                    
                                        <td width="82" class="texte4" bgcolor="#FFF" style=" background-color:#FFF"><div align="center" style=" background-color:#FFF">
                    
                                          {{ $facture->total}}
                                        </div>                      </td>
                    
                                        <td width="80" align="right" class="texte4" bgcolor="#FFF" style=" background-color:#FFF"><div align="center" style=" background-color:#FFF">
                    
                                            {{ $facture->redfix }}
                                        </div></td>
                    
                                        <td width="100" align="right" class="texte4" bgcolor="#FFF" style=" background-color:#FFF"><div align="center">
                    
                                            {{ $facture->montant }}
                                        </div></td>
                    
                                        <td width="65" align="right" class="texte4" bgcolor="#FFF" style=" background-color:#FFF"><div align="center">
                    
                                            {{ $facture->prix }}
                                        </div></td>
                    
                                        <td width="100" align="right" class="texte4"  style=" background-color:#FFF"><div align="center">
                    
                                          {{ $facture->consommation }}                   
                    
                                        </div></td>
                    
                                        <td width="70" align="right" class="texte4" bgcolor="#FFF" style=" background-color:#FFF"><div align="center">
                    
                                                                0
                                        </div>                      </td>
                    
                                        <td width="66" align="right" class="texte4" bgcolor="#FFF" style=" background-color:#FFF"><div align="center">
                    
                                                                0                    </div>                      </td>
                    
                                        <td width="61" align="right" class="texte4" bgcolor="#FFF" style=" background-color:#FFF"><div align="center">
                    
                                          {{ $facture->nbmois }}
                                        </div>                    </td>
                    
                                        <td width="126" align="right" class="texte4" bgcolor="#FFF" style=" background-color:#FFF">
                                            ECLAIRAGE                    </td>
                                      </tr>
                                    <tr><td colspan="9"><div style="border-bottom-color:#000000; border-bottom-style: solid; border-bottom-width: thin"></div></td></tr>
                                                            
                                          
                                  </table></td>
                    
                                </tr>
                    
                    
                    <tr valign="middle" height="25px">
                        <td colspan="3">
                            <table width="800" border="0" cellspacing="0" cellpadding="0" bordercolor="#97CCE6" >
                                <tr valign="middle" height="25px">
                                    <td width="90" bgcolor="#EEEEEE" class="texte4">
                                        <div align="center">
                                            {{ $facture->total}}	                    	
                                        </div>						
                                    </td>
                                    <td width="650" align="right" bgcolor="#fff" class="texte4" style=" background-color:#FFF">
                                        <div class="Style9" style="width:250px; height:25px; float:left; background-color:#EEEEEE; vertical-align:middle">
                                            <div align="right" class="entete_facture">
                                                <span style="text-align:left; float:left">Sous Total Consommation</span>مجموع الاستهلاك
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr valign="middle" height="25px">
                        <td colspan="3">&nbsp;
                            <div class="Style9">
                                <div align="right" class="entete_facture" style="font-size:18px; background-color:#ECF7FB">
                                    Services / الخدمات
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table width="800" border="0" cellspacing="0" cellpadding="0" bordercolor="#97CCE6" >
                                <tr valign="middle" height="25px">
                                    <td width="90" bgcolor="#FFF" class="texte4" style=" background-color:#FFF">
                                        <div align="center">
                                            &nbsp;
                                        </div>
                                    </td>
                                    <td width="650" align="right" bgcolor="#FFF" class="texte4" style=" background-color:#FFF">
                                        &nbsp;
                                            <div class="Style9">
                                                <div align="right" class="entete_facture">
                                                    <span style="text-align:left; float:left">  
                                                    </span>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div style="border-bottom-color:#000000; border-bottom-style: solid; border-bottom-width: thin">
                                        </div>
                                    </td>
                                </tr>
                                <tr valign="middle" height="25px">
                                    <td width="90" bgcolor="#EEEEEE" class="texte4">
                                                <div align="center">
                                                    {{ $facture->totalservices }}                    
                                                </div>						
                                    </td>
                                    <td width="650" align="right" bgcolor="#fff" class="texte4" style=" background-color:#FFF">
                                        <div class="Style9" style="width:250px; height:25px; float:left; background-color:#EEEEEE; vertical-align:middle">
                                            <div align="right" class="entete_facture">
                                                <span style="text-align:left; float:left">
                                                    Sous Total Services
                                                </span> 
                                                مجموع الخدمات
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr valign="middle" height="25px">
                        <td colspan="3">&nbsp;
                            <div class="Style9">
                                <div align="right" class="entete_facture" style="font-size:18px; background-color:#ECF7FB">
                                    Taxes / الأداءات
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table width="800" border="0" cellspacing="0" cellpadding="0" bordercolor="#97CCE6" >
                                <tr valign="middle" height="25px">
                                    <td width="90" bgcolor="#FFF" class="texte4" style=" background-color:#FFF">
                                        <div align="center">
                                            {{ $facture->tva }}	
                                        </div>						
                                    </td>
                                    <td width="650" align="right" bgcolor="#FFF" class="texte4" style=" background-color:#FFF">
                                        <div class="Style9">
                                             <div align="right" class="entete_facture">
                                                <span style="text-align:left; float:left">TVA</span>
                                                    الأداء على القيمة المضافة
                                            </div>
                                        </div>    
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div style="border-bottom-color:#000000; border-bottom-style: solid; border-bottom-width: thin">
                                        </div>
                                    </td>
                                </tr>
                                <tr valign="middle" height="25px">
                                    <td width="90" bgcolor="#fff" class="texte4" style=" background-color:#FFF">
                                        <div align="center">
                                         {{ $facture->rtt }}      
                                        </div>
                                    </td>
                                    <td width="650" align="right" bgcolor="#fff" class="texte4" style=" background-color:#FFF">
                                        <div class="Style9">
                                            <div align="right" class="entete_facture"><span style="text-align:left; float:left">RTT</span>
                                                معلوم الإذاعة و التلفزة
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div style="border-bottom-color:#000000; border-bottom-style: solid; border-bottom-width: thin">
                                        </div>
                                    </td>
                                </tr>
                                <tr valign="middle" height="25px">
                                    <td width="90" bgcolor="#EEEEEE" class="texte4">
                                        <div align="center">
                                            {{ $facture->totaltaxe }}
                                        </div>
                                    </td>
                                    <td width="650" align="right" bgcolor="#fff" class="texte4" style=" background-color:#FFF">
                                        <div class="Style9" style="width:250px; height:25px; float:left; background-color:#EEEEEE; vertical-align:middle">
                                            <div align="right" class="entete_facture">
                                                <span style="text-align:left; float:left">Sous Total Taxes </span>
                                                    مجموع الأداءات
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr valign="middle" height="25px">
                        <td colspan="3">&nbsp;
                            <div class="Style9">
                                <div align="right" class="entete_facture" style="font-size:18px; background-color:#ECF7FB">
                                    Solde / الرصيد
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table width="800" border="0" cellspacing="0" cellpadding="0" bordercolor="#97CCE6" >
                                <tr valign="middle" height="25px">
                                    <td width="90" bgcolor="#FFF" class="texte4" style=" background-color:#FFF">
                                        <div align="center">
                                            -&nbsp;{{$facture->montant_a_deduire}}               
                                        </div>
                                    </td>
                                    <td width="650" align="right" bgcolor="#FFF" class="texte4" style=" background-color:#FFF">
                                        <div class="Style9">
                                            <div align="right" class="entete_facture">
                                                <span style="text-align:left; float:left">A d&eacute;duire</span> 
                                                    يخصم 
                                            </div>
                    
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div style="border-bottom-color:#000000; border-bottom-style: solid; border-bottom-width: thin">
                                        </div>
                                    </td>
                                </tr>
                                <tr valign="middle" height="25px">
                                    <td width="90" bgcolor="#fff" class="texte4" style=" background-color:#FFF">
                                        <div align="center">
                                            +&nbsp;{{ $facture->montant_de_credit }}
                                        </div>	
                                    </td>
                                    <td width="650" align="right" bgcolor="#fff" class="texte4" style=" background-color:#FFF">
                                        <div class="Style9">
                                            <div align="right" class="entete_facture">
                                                <span style="text-align:left; float:left">
                                                     Arri&eacute;r&eacute;s
                                                </span>
                                                    متخلد بالذمة
                                            </div>
                    
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div style="border-bottom-color:#000000; border-bottom-style: solid; border-bottom-width: thin">
                                        </div>
                                    </td>
                                </tr>
                                <tr valign="middle" height="25px">
                                    <td width="90" bgcolor="#EEEEEE" class="texte4">
                                        <div align="center">
                                           {{$facture->totalsolde}}
                                        </div>
                                    </td>
                                    <td width="650" align="left" bgcolor="#fff" class="texte4" valign="baseline" style=" background-color:#FFF">
                                        <div class="Style9">
                                            <div align="right" class="entete_facture" style="width:250px; height:25px; background-color:#EEEEEE;">
                                                <span style="text-align:left; float:left">Sous Total Solde</span>
                                                مجموع الرصيد
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table width="800" border="0" align="left" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="400">
                                        <table width="400" height="50" border="1" cellpadding="0" cellspacing="0" bordercolor="#CC0000">
                                            <tr>
                                                <td width="215" bgcolor="#D8ECF5">
                                                    <table width="400" height="45" border="0" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td width="230">
                                                                <div align="left" style="margin-left: 40px">
                                                                    <span class="soustitrebleuclair">
                                                                        <b>
                                                                         {{ $facture->montant_total }}
                                                                        </b>
                                                                    </span>
                                                                    <br />
                                                                  
                                                                </div>
                                                            </td>
                                                            <td width="131">
                                                                <div align="center" class="Style9">
                                                                    <div align="right">
                                                                        <strong>&#1575;&#1604;&#1605;&#1576;&#1604;&#1594; &#1575;&#1604;&#1605;&#1591;&#1604;&#1608;&#1576; <br />
                                                                            Montant &agrave; payer
                                                                        </strong>
                                                                    </div>
                    
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="206" align="left">
                                        <div align="right" class="Style7">
                                            <table width="179" height="50" border="1" align="right" cellpadding="0" cellspacing="0" bordercolor="#CC0000">
                                                <tr>
                                                    <td width="175" bgcolor="#D8ECF5">
                                                        <table width="275" height="45" border="0" align="center" cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td width="208">
                                                                    <div align="center" class="Style9">
                                                                        &#1575;&#1604;&#1585;&#1580;&#1575;&#1569; &#1575;&#1604;&#1583;&#1601;&#1593; &#1602;&#1576;&#1604;
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div align="center">
                                                                        <span class="texte4"><b>{{ $facture->payeravl }}</b>
                                                                            </span>
                                                                    </div>
                                                                </td>
                    
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                    
                    
                                </tr>
                    
                            </table>
                        </td>
                    </tr>
                </table>
                <div class="py-12">
                
                    <a href="/dashboard/facture/passer_demande/{{$facture->reference}}"><input type="submit" class="btn" value="Passer demande" /></a>
                    <a href="/paiement/{{$facture->reference}}/{{ $facture->montant_total  }}"><input type="submit" class="btn" value="Payer" /></a>
                
                        
            </div>
            </div>
        </div>
    </div>
    
</div>








        
    </x-app-layout>
</body>

</html>
