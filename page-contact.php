<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header'); ?>
    <main>
        <section class="l-section p-fixedBackground --aboutus">
            <div class="l-container__middle --vertical js-headerFloatTrigger">
                <h2 class="p-heading__primary --center">Contact</h2>
            </div>
        </section>

        <section class="l-section p-section">
            <div class="l-container__middle">
                <div class="p-form__body">
                    <p class="p-contents__text">お問い合わせは下記をご記入のうえ、<br>送信してください。</p>
                </div>
                <form action="">
                    <div class="p-form__row is-required">
                        <div class="p-form__item">
                            <div class="p-form__label">お名前</div>
                            <input type="text" name="name" class="c-input__text js-input">
                        </div>
                    </div>
                    <div class="p-form__row is-required">
                        <div class="p-form__item">
                            <div class="p-form__label">会社名</div>
                            <input type="text" name="company" class="c-input__text js-input">
                        </div>
                    </div>
                    <div class="p-form__row is-required">
                        <div class="p-form__item">
                            <div class="p-form__label">E-mail / 半角</div>
                            <input type="email" name="email" class="c-input__text js-input">
                        </div>
                    </div>
                    <div class="p-form__row is-required">
                        <div class="p-form__item">
                            <div class="p-form__label">E-mail / 確認用</div>
                            <input type="email" name="email2" class="c-input__text js-input">
                        </div>
                    </div>
                    <div class="p-form__row is-required">
                        <div class="p-form__item">
                            <div class="p-form__label--message">ご相談内容</div>
                            <div class="c-textarea">
                                <textarea name="message"></textarea>
                            </div>
                        </div>
                    </div>
                    <p class="l-button"><button class="c-button p-button --short">送信</button></p>
                </form>
            </div>
        </section>

        <?php get_template_part('includes/footer'); ?>
        <?php get_footer(); ?>
    </main>
</body>

</html>