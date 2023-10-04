<a class="wp_float" id="chat_close0">
    <img src="{{ asset('images/whatsapp_flotante.png') }}">
</a>
<div class="fondo_all d-none">
    <div class="chat">
        <div class="chat_header">
            <div class="logo">
                <img src="{{ asset('images/logo-circle.png') }}" alt="">
            </div>
            <div class="title">
                <p><span>SUMMACENTER</span><br>online</p>
            </div>
            <button id="chat_close1">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 348.333 348.334">
                    <title>Close</title>
                    <path d="M336.559,68.611L231.016,174.165l105.543,105.549c15.699,15.705,15.699,41.145,0,56.85
                        c-7.844,7.844-18.128,11.769-28.407,11.769c-10.296,0-20.581-3.919-28.419-11.769L174.167,231.003L68.609,336.563
                        c-7.843,7.844-18.128,11.769-28.416,11.769c-10.285,0-20.563-3.919-28.413-11.769c-15.699-15.698-15.699-41.139,0-56.85
                        l105.54-105.549L11.774,68.611c-15.699-15.699-15.699-41.145,0-56.844c15.696-15.687,41.127-15.687,56.829,0l105.563,105.554
                        L279.721,11.767c15.705-15.687,41.139-15.687,56.832,0C352.258,27.466,352.258,52.912,336.559,68.611z"></path>
                  </svg>
            </button>
        </div>
        <div class="chat_content">
            <div class="text_left">
                <p>
                    {{ $setting->floating_text }}
                </p>
            </div>
            <div class="text_right">
                <form action="" class="needs-validation-wp" novalidate id="chat_form">
                    @csrf
                    <input type="hidden" name="chat_telephone" id="chat_telephone" value={{ $setting->floating_telephone }}>
                    <input class="form-control" type="email" name="chat_email" id="chat_email" placeholder="Email *" required>
                    <div class="invalid-feedback">
                        Campo obligatorio
                    </div>
                    <textarea class="form-control" name="chat_msg" id="chat_msg" rows="3" placeholder="Mensaje *" required></textarea>
                    <div class="invalid-feedback">
                        Campo obligatorio
                    </div>
                    <button id="chat_button">Iniciar conversación</button>
                </form>
            </div>
        </div>
    </div>
</div>