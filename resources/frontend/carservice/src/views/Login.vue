<template>
  <form @submit.prevent="login" class="card card-bg">
    <div class="card-content">
      <span class="card-title">Вход в личный кабинет</span>
      <div class="input-field">
        <label for="email">Email</label>
        <input id="email" type="email" v-model.trim="email" required />
      </div>
      <div class="input-field">
        <label for="password">Пароль</label>
        <input
          id="password"
          type="password"
          v-model.trim="password"
          minLength="6"
          maxLength="16"
          required
        />
      </div>
    </div>
    <div class="card-action">
      <div>
        <button class="btn waves-effect auth-submit" type="submit">
          Войти
        </button>
      </div>

      <p class="no-account">
        Нет аккаунта?
        <router-link to="/registr">
          <a>Регистрация</a>
        </router-link>
      </p>
    </div>
  </form>
</template>
<script>
import { fb } from "../firebase/firebase.config";
import {
  getAuth,
  signInWithEmailAndPassword,
} from "https://www.gstatic.com/firebasejs/9.8.1/firebase-auth.js";
const auth = getAuth(fb);

export default {
  data() {
    return {
      email: "",
      password: "",
    };
  },
  methods: {
    login() {
      signInWithEmailAndPassword(auth, this.email, this.password)
        .then((userCredential) => {
          const user = userCredential.user;
          console.log(`${user.email}, вы вошли в аккаунт!`);
          this.$router.push("/cabinet");
        })
        .catch((error) => {
          console.log("errorCode: ", error.code);
          console.log("errorMessage: ", error.message);
        });
    },
  },
};
</script>

<style scoped lang="scss">
.card {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 400px;
  margin: auto;
  &-bg {
    background-color: #8c716b;
    opacity: 0.85;
    height: auto;
  }
  .card-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 24px 0 0;
    border-radius: 0 0 2px 2px;
    width: 93%;
    & p {
      margin: 0;
    }
    .card-title {
      display: block;
      line-height: 32px;
      margin-bottom: 20px;
      text-transform: uppercase;
      color: #ffffff;
      background-color: #4c2e27;
      width: 310px;
      text-align: center;
      & i {
        line-height: 32px;
      }
    }
  }
  .card-action {
    background-color: #4c2e27;
    border-top: 1px solid rgba(160, 160, 160, 0.2);
    position: relative;
    padding: 16px 24px;
    margin-bottom: 10px;
    width: 65%;
    &:last-child {
      border-radius: 20px 20px 20px 20px;
    }
    .waves-effect {
      position: relative;
      cursor: pointer;
      display: inline-block;
      overflow: hidden;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      -webkit-tap-highlight-color: transparent;
      vertical-align: middle;
      z-index: 2;
      -webkit-transition: 0.3s ease-out;
      transition: 0.3s ease-out;
    }
  }
}

.input-field {
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
  margin-top: 1rem;
  margin-bottom: 2rem;
  height: 40px;
  width: 70%;
  & > label {
    color: #ffffff;
    position: absolute;
    top: -40px;
    font-size: 1rem;
    cursor: text;
    -webkit-transition: color 0.2s ease-out, -webkit-transform 0.2s ease-out;
    transition: color 0.2s ease-out, -webkit-transform 0.2s ease-out;
    transition: transform 0.2s ease-out, color 0.2s ease-out;
    transition: transform 0.2s ease-out, color 0.2s ease-out,
      -webkit-transform 0.2s ease-out;
    -webkit-transform-origin: 0% 100%;
    transform-origin: 0% 100%;
    text-align: initial;
    -webkit-transform: translateY(12px);
    transform: translateY(12px);
    &:not(.label-icon).active {
      -webkit-transform: translateY(-14px) scale(0.8);
      transform: translateY(-14px) scale(0.8);
      -webkit-transform-origin: 0 0;
      transform-origin: 0 0;
    }
  }
  & > input:invalid {
    border: 2px solid red;
  }
  & > input:valid {
    border: 2px solid green;
  }
  & > input[type="email"] {
    width: 100%;
  }
  & > input[type="password"] {
    width: 100%;
  }
  & > input[type=""]:not(.browser-default) + label {
    -webkit-transform: translateY(-14px) scale(0.8);
    transform: translateY(-14px) scale(0.8);
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
  }
  .helper-text {
    position: relative;
    min-height: 18px;
    display: block;
    font-size: 12px;
    color: rgba(0, 0, 0, 0.54);
    margin-top: 0.5rem;
    &::after {
      opacity: 1;
      position: absolute;
      top: 0;
      left: 0;
    }
  }
  .invalid {
    color: yellow;
  }
}
.btn {
  border: none;
  border-radius: 2px;
  background-color: #ff6433;
  height: 36px;
  line-height: 36px;
  letter-spacing: 0.5px;
  text-align: center;
  color: #fff;
  padding: 0 16px;
  text-transform: uppercase;
  &:hover {
    box-shadow: inset 0 0 3px 3px rgb(255, 255, 255, 0.9);
  }
  &:active {
    box-shadow: none;
  }
}

.auth-submit {
  width: 100%;
}

.no-account {
  color: #ffffff;
  margin-top: 10px;
  & a {
    color: pink;
    font-size: 14px;
    text-transform: uppercase;
    text-decoration: none;
  }
}
</style>
