{extends file="../../template/auth/auth.tpl"}
{block name='register'}
    <div class="message__container"></div>
    <div class="form__container" id="register">
        <div class="form__header">
            <a>Create Your Account</a>
        </div>
        <hr/>
        <div class="form__contact">
            <form>
                <div class="form_field_name form_field_holder">
                    <label>Full Name</label>
                    <input type="text" name='name' placeholder="Ex: Nicole Wolf">
                </div>
                <div class="form_field_mail form_field_holder">
                    <label>Email ID</label>
                    <input type="email"  name='mailid' placeholder="Ex: example@gmail.com">
                </div>
            </form>
        </div>
        <div class="form__header">
            <a>Account Authentication</a>
        </div>
        <hr/>
        <div class="form__authenticate">
            <div class="form_field_username form_field_holder">
                <label>Username</label>
                <input type="text" name='username' placeholder="Ex: nicolewolf@89">
            </div>
            <div class="form_field_password form_field_holder">
                <label>Password</label>
                <input type="password"  name='password' placeholder="Ex: nicole@89">
            </div>
            <div class="form_field_conpassword form_field_holder">
                <label>Confirm Password</label>
                <input type="password"  name='conpass' placeholder="Retype Passsword">
            </div>
            <div class="form_field_pin  form_field_holder">
                <label>Pin</label>
                <input type="number"  name='pin' placeholder="Ex: 1234">
            </div>
            <div class="form_field_conpin form_field_holder">
                <label>Confirm Pin</label>
                <input type="number"  name='conpin' placeholder="Retype Pin">
            </div>
        </div>
    </div>
{/block}