{if $contact}
    <div class="contacts-wrapper">
        <div class="contacts">
            <p class='contacts-slogan'>Мы всегда рады сотрудничеству</p>
            <div class="contacts-item">
                <p class="contacts-title">Адрес</p>
                <div class="contact-info">
                    {$contact.address}
                </div>
            </div>
            <div class="contacts-item">
                <p class="contacts-title">Адрес приозводства</p>
                <div class="contact-info">
                    {$contact.production}
                </div>
            </div>
            <div class="contacts-item">
                <p class="contacts-title">E-mail</p>
                <div class="contact-info">
                    <p>{$contact.email}</p>
                </div>
            </div>
            <div class="contacts-item">
                <p class="contacts-title">Телефон</p>
                <div class="contact-info">
                    {$contact.phone}
                </div>
            </div>
        </div>
        <div class="map-wrapper">
            <div class="map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af2bb0db90823c5e4bcb8fa65bbbd061a271ca92de49c3f41131eabcb704deafd&amp;width=100%25&amp;height=700&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
            <div class="map-responsive">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af2bb0db90823c5e4bcb8fa65bbbd061a271ca92de49c3f41131eabcb704deafd&amp;width=100%25&amp;height=320&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </div>
{/if}