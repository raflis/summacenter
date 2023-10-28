@extends('web.layout')
@section('title', 'Gracias por tu compra | SUMMA CENTER LATAM')
@section('description', 'Gracias por tu compra | SUMMA CENTER LATAM')
@section('keywords', 'Gracias por tu compra | SUMMA CENTER LATAM')
@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec65">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">

                <table class="shadow" align="center" cellpadding="0" cellspacing="0" border="0" class="Contenedor" style="width: 100%;">
                <tbody>
                <tr>
                  <td align="center" style="padding: 0px; margin: 0px; border: 0px; background-color: #FFF; width: 100%;">
                  <table border="0" align="center" cellpadding="0" cellspacing="0" style="width: 650px; margin-left: auto; margin-right: auto;">
                  <tbody>
                  <tr>
                  <td align="center" style="padding: 0px; margin: 0px; border: 0px; background-color: #ffffff; width: 650px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                      <tr>
                        <td colspan="4" align="center" valign="top">&nbsp;</td>
                      </tr>

                      <tr>
                        <td width="4%" height="18">&nbsp;</td>
                        <td width="7%">&nbsp;</td>
                        <td width="86%">&nbsp;</td>
                        <td width="3%">&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="18">&nbsp;</td>
                        <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td>
                              
                              <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 18px; color: #061d38; line-height: 20px; font-weight: bold; text-align: center; margin: 0">
                                
                                Hola {{ $recorded->user_name }} {{ $recorded->user_lastname }}
                                
                                </p>
                              
                              </td>
                            </tr>
                          <tr>
                            <td></td>
                            </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>
                              <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 17px; color: #061d38; line-height: 20px; font-weight: regular; text-align: center; margin: 0">
                                
                                Gracias por tu compra
                                
                                </p>
                              </td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td>
                              <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px; color: #061d38; line-height: 20px; font-weight: regular; text-align: left; margin: 0">
                                
                                Tu pedido ha sido confirmado.<br>
                Los detalles de tu pedido se muestran a continuación
                                
                                </p>
                              </td>
                            </tr>
                          <tbody>
                            </tbody>
                          </table></td>
                        <td align="right">&nbsp;</td>
                      </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td colspan="2">&nbsp;</td>
                          <td>&nbsp;</td>
                          </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td colspan="2" style="border-top:1px dashed #061D38">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td colspan="2"><p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px; color: #061d38; line-height: 20px; font-weight: bold; text-align: center; margin: 0">
                                
                                Detalles del pedido
                                
                                </p></td>
                          <td>&nbsp;</td>
                          </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td colspan="2">&nbsp;</td>
                          <td>&nbsp;</td>
                          </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                              <tr>
                                <td width="49%"><p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 13px; color: #061d38; line-height: 20px; font-weight: normal; text-align: left; margin: 0; font-style: italic;">
                                
                                Número de pedido: {{ $recorded->purchase_number }}
                                
                                </p></td>
                                <td width="51%"><p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 13px; color: #061d38; line-height: 20px; font-weight: normal; text-align: right; margin: 0; font-style: italic;">
                                
                                Fecha del pedido: {{ ucfirst(\Carbon\Carbon::parse($recorded->transaction_date)->formatLocalized('%A, %d de %B %Y')) }}
                                
                                </p></td>
                                </tr>
                              </tbody>
                            </table></td>
                          <td>&nbsp;</td>
                          </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td colspan="2">&nbsp;</td>
                          <td>&nbsp;</td>
                          </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                              <tr>
                                <td colspan="2" style="border-top: 2px solid #061D38; border-bottom: 2px solid #061D38"><p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 14px; color: #061d38; line-height: 20px; font-weight: bold; text-align: left; margin: 0;padding-left:7px">
                                  
                                  Curso
                                  
                                  </p></td>
                                <td width="6%" style="border-top: 2px solid #061D38; border-bottom: 2px solid #061D38">&nbsp;</td>
                                <td width="19%" style="border-top: 2px solid #061D38; border-bottom: 2px solid #061D38"><p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 14px; color: #061d38; line-height: 20px; font-weight: bold; text-align: right; margin: 0">
                                
                                Precio
                                
                                </p></td>
                                </tr>
                              <tr>
                                <td width="12%" bgcolor="#EFF0F4">&nbsp;</td>
                                <td width="63%" bgcolor="#EFF0F4">&nbsp;</td>
                                <td bgcolor="#EFF0F4">&nbsp;</td>
                                <td bgcolor="#EFF0F4">&nbsp;</td>
                                </tr>
                          @foreach($recorded->detail as $id => $details)
                              <tr>
                                <td align="center" bgcolor="#EFF0F4"><img src="{{ str_replace(' ', '%20', $details['image']) }}" width="55" height="54" alt=""/></td>
                                <td bgcolor="#EFF0F4"><p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 14px; color: #061d38; line-height: 20px; font-weight: normal; text-align: left; margin: 0">
                                
                                {{ $details['name'] }}
                                
                                </p></td>
                                <td bgcolor="#EFF0F4">&nbsp;</td>
                                <td bgcolor="#EFF0F4"><p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 14px; color: #061d38; line-height: 20px; font-weight: normal; text-align: right; margin: 0">
                                
                
                
                              {{ $details['price'] }} PEN
                                
                                </p></td>
                                </tr>
                            
                            @endforeach
                            <tr>
                                <td colspan="2" bgcolor="#EFF0F4"><p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 14px; color: #061d38; line-height: 20px; font-weight: bold; text-align: right; margin: 0">
                                  
                                  Total
                                  
                                  </p></td>
                                <td bgcolor="#EFF0F4">&nbsp;</td>
                                <td bgcolor="#EFF0F4"><p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 14px; color: #061d38; line-height: 20px; font-weight: normal; text-align: right; margin: 0">
                                
                                {{ $recorded->amount }} {{ $recorded->currency }}
                                
                                </p>
                            </td>
                              </tr>
                          
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                </tr>
                              </tbody>
                            </table></td>
                          <td>&nbsp;</td>
                          </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td colspan="2">&nbsp;</td>
                          <td>&nbsp;</td>
                          </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td colspan="2" style="border-top:1px dashed #061D38">&nbsp;</td>
                          <td>&nbsp;</td>
                          </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                              <tr>
                                <td width="47%"><p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 13px; color: #061d38; line-height: 20px; font-weight: bold; text-align: center; margin: 0">
                                
                                Datos de usuario
                                
                                </p></td>
                                <td width="6%">&nbsp;</td>
                                <td width="47%"><p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 13px; color: #061d38; line-height: 20px; font-weight: bold; text-align: center; margin: 0">
                                
                                Datos de facturación
                                
                                </p></td>
                                </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                </tr>
                              <tr>
                                <td style="border: 1px dashed #061d38"><p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 13px; color: #061d38; line-height: 20px; font-weight: normal; text-align: left; margin: 0;padding: 8px">
                                    {{ $recorded->user_name }} {{ $recorded->user_lastname }}<br>
                                    {{ $recorded->user_department }}<br>
                                    {{ $recorded->user_district }}<br>
                                    {{ $recorded->user_address }}<br>
                                    {{ $recorded->user_type_document }} {{ $recorded->user_document }}
                                    </p></td>
                                <td>&nbsp;</td>
                                <td style="border: 1px dashed #061d38"><p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 13px; color: #061d38; line-height: 20px; font-weight: normal; text-align: left; margin: 0;padding: 8px">
                                    {{ $recorded->invoice_name }}<br>
                                    {{ $recorded->invoice_department }} {{ $recorded->invoice_district }}<br>
                                    {{ $recorded->invoice_address }}<br>
                                    {{ $recorded->invoice_telephone }}<br>
                                    {{ $recorded->invoice_email }}
                                    </p></td>
                                </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                </tr>
                              </tbody>
                            </table></td>
                          <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                  <td colspan="5"><p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 13px; color: #061d38; line-height: 20px; font-weight: bold; text-align: left; margin: 0;padding-left:8px">
                                      
                                      Formas de pago
                                      
                                      </p></td>
                                  </tr>
                                <tr>
                                  <td width="22%">&nbsp;</td>
                                  <td width="3%">&nbsp;</td>
                                  <td width="32%">&nbsp;</td>
                                  <td width="27%">&nbsp;</td>
                                  <td width="16%">&nbsp;</td>
                                  </tr>
                                <tr>
                                  <td align="center"><img src="{{ asset('images/bcp.png') }}" width="130" height="49" alt=""/></td>
                                  <td align="center">&nbsp;</td>
                                  <td colspan="3" valign="middle"><p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 13px; color: #061d38; line-height: 20px; font-weight: normal; text-align: left; margin: 0;padding: 0px">
                                Cuenta Corriente en Soles: 191-2598721-0-05<br>
                                CCI: 002 191 002598 72100 588
                                </p></td>
                                  </tr>
                                <tr>
                                  <td align="center">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  </tr>
                                <tr>
                                  <td align="center"><img src="{{ asset('images/bbva0.png') }}" width="130" height="49" alt=""/></td>
                                  <td>&nbsp;</td>
                                  <td colspan="3"><p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 13px; color: #061d38; line-height: 20px; font-weight: normal; text-align: left; margin: 0;padding: 0px">
                                Cuenta Corriente en Soles: 0011-0101-01000513-88<br>
                                CCI: 011 101 0001 0005 138 835
                                </p></td>
                                  </tr>
                                <tr>
                                  <td align="center">&nbsp;</td>
                                  <td align="center">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td align="center">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  </tr>
                                <tr>
                                  <td align="center"><img src="{{ asset('images/nacion.png') }}" width="130" height="49" alt=""/></td>
                                  <td align="center">&nbsp;</td>
                                  <td colspan="3"><p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 13px; color: #061d38; line-height: 20px; font-weight: normal; text-align: left; margin: 0;padding: 0px">
                                N° Cuenta de Detracciones<br>
                                Banco de la Nación: 00006084958
                                </p></td>
                                  </tr>
                                </tbody>
                              </table></td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td colspan="2">&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td colspan="2"><p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 13px; color: #061d38; line-height: 20px; font-weight: normal; text-align: left; margin: 0;padding-left: 8px">
                                Envíanos una captura o foto de la operacion a nuestro Whatsapp:
                                </p></td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td colspan="2">&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td align="center">
                              <img src="{{ asset('images/wp.png') }}" width="30" height="29" alt=""/>
                            </td>
                            <td><p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 13px; color: #061d38; line-height: 20px; font-weight: normal; text-align: left; margin: 0;padding-left: 0px">
                                <a href="https://api.whatsapp.com/send/?phone=51946543435" style="color:#4AA0FF" target="_blank">(+51) 946543435</a> (Raúl Daniel De La Cruz Peña - Jefe de Ventas)
                                </p></td>
                            <td>&nbsp;</td>
                            </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td colspan="2">&nbsp;</td>
                          <td>&nbsp;</td>
                          </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td colspan="2">&nbsp;</td>
                          <td>&nbsp;</td>
                          </tr>
                        </tbody>
                  </table></td>
                  </tr>
                  </tbody>
                  </table>
                  </td>
                </tr>
                </tbody>
                </table>
                
            </div>
            <div class="back text-center">
                <a href="{{ route('index') }}">
                    <i class="fa-solid fa-chevron-left"></i> Inicio
                </a>
            </div>
        </div>
    </div>
</section>

@endsection