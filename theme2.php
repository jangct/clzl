<?php
$color = $settings['color_web'];
$config_game = $soicoder->fetch_assoc("SELECT * FROM `game`", 0);
?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7BTGYDL779">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7BTGYDL779');
</script>
<html class="no-js" lang="vi">
<head>
    <title><?=ucfirst($_SERVER['SERVER_NAME']);?> - Hệ Thống Mini Game Chẳn Lẻ ZaloPay Uy Tín - Tự Động</title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="<?=ucfirst($_SERVER['SERVER_NAME']);?> - Hệ Thống Mini Game Chẳn Lẻ ZaloPay Uy Tín - Tự Động"
        name="title">
    <meta content="<?=$settings['description'];?>" name="description">
    <meta content="<?=$settings['keyword'];?>" name="keywords">
    <meta content="/" property="og:url">
    <meta content="article" property="og:type">
    <meta content="<?=ucfirst($_SERVER['SERVER_NAME']);?> - Hệ Thống Mini Game Chẳn Lẻ ZaloPay Uy Tín - Tự Động"
        property="og:title">
    <meta content="<?=$settings['description'];?>" property="og:description">
    <meta content="<?=$settings['logo'];?>" property="og:image">
    <link href="<?= $settings['favion']; ?>" rel="apple-touch-icon">
    <link href="<?= $settings['favion']; ?>" rel="shortcut icon" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css2/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css2/bootstrap-social.css" rel="stylesheet">
    <link href="assets/css2/style.css?ver=28" rel="stylesheet">
    <link href="assets/css2/custom.1.css?ver=28" rel="stylesheet">
    <link href="assets/css2/wheel.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-notify@0.5.4/dist/simple-notify.min.css">
    <style>
    .aa:hover,
    .aa:focus {
        background: #ad4105;
        border-radius: 5px
    }

    .coffer-box {
        display: block;
        position: fixed;
        bottom: 90px;
        right: 15px;
        width: 15%;
        z-index: 1000;
        cursor: pointer;
        /*background: #ad410569;*/
        border-radius: 10px;
        text-align: center;
        padding: 15px;
    }

    @media (max-width: 767px) {
        .coffer-box {
            background: unset;
            width: 50%;
            bottom: 20px;
        }
    }

    .mb-0 {
        margin-bottom: 0;
    }

    .mt-100 {
        margin-top: 100px;
    }

    .mainbar {
        padding: 0px !important;
    }

    .panel-heading {
        background-color: <?=$color;?> !important;
        border-color: <?=$color;?> !important;
    }

    .panel-primary {
        /*background-color: <?=$color;?> !important;*/
        border-color: <?=$color;?> !important;
        padding-bottom: 20px;
    }

    .navbar {
        background-color: <?=$color;?> !important;

    }

    .navbar .navbar-collapse {
        background-color: <?=$color;?> !important;
    }

    .table .bg-primary {
        background-color: <?=$color;?> !important;
    }

    .footer {
        background-color: <?=$color;?> !important;
    }

    .mainbar {
        background-color: #fff !important;
    }
    </style>
    <style>
    .swal2-popup.swal2-toast {
        box-sizing: border-box;
        grid-column: 1/4 !important;
        grid-row: 1/4 !important;
        grid-template-columns: 1fr 99fr 1fr;
        padding: 1em;
        overflow-y: hidden;
        background: #fff;
        box-shadow: 0 0 1px hsla(0deg, 0%, 0%, .075), 0 1px 2px hsla(0deg, 0%, 0%, .075), 1px 2px 4px hsla(0deg, 0%, 0%, .075), 1px 3px 8px hsla(0deg, 0%, 0%, .075), 2px 4px 16px hsla(0deg, 0%, 0%, .075);
        pointer-events: all
    }

    .swal2-popup.swal2-toast>* {
        grid-column: 2
    }

    .swal2-popup.swal2-toast .swal2-title {
        margin: .5em 1em;
        padding: 0;
        font-size: 1em;
        text-align: initial
    }

    .swal2-popup.swal2-toast .swal2-loading {
        justify-content: center
    }

    .swal2-popup.swal2-toast .swal2-input {
        height: 2em;
        margin: .5em;
        font-size: 1em
    }

    .swal2-popup.swal2-toast .swal2-validation-message {
        font-size: 1em
    }

    .swal2-popup.swal2-toast .swal2-footer {
        margin: .5em 0 0;
        padding: .5em 0 0;
        font-size: .8em
    }

    .swal2-popup.swal2-toast .swal2-close {
        grid-column: 3/3;
        grid-row: 1/99;
        align-self: center;
        width: .8em;
        height: .8em;
        margin: 0;
        font-size: 2em
    }

    .swal2-popup.swal2-toast .swal2-html-container {
        margin: .5em 1em;
        padding: 0;
        font-size: 1em;
        text-align: initial
    }

    .swal2-popup.swal2-toast .swal2-html-container:empty {
        padding: 0
    }

    .swal2-popup.swal2-toast .swal2-loader {
        grid-column: 1;
        grid-row: 1/99;
        align-self: center;
        width: 2em;
        height: 2em;
        margin: .25em
    }

    .swal2-popup.swal2-toast .swal2-icon {
        grid-column: 1;
        grid-row: 1/99;
        align-self: center;
        width: 2em;
        min-width: 2em;
        height: 2em;
        margin: 0 .5em 0 0
    }

    .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
        display: flex;
        align-items: center;
        font-size: 1.8em;
        font-weight: 700
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
        width: 2em;
        height: 2em
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
        top: .875em;
        width: 1.375em
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
        left: .3125em
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
        right: .3125em
    }

    .swal2-popup.swal2-toast .swal2-actions {
        justify-content: flex-start;
        height: auto;
        margin: 0;
        margin-top: .5em;
        padding: 0 .5em
    }

    .swal2-popup.swal2-toast .swal2-styled {
        margin: .25em .5em;
        padding: .4em .6em;
        font-size: 1em
    }

    .swal2-popup.swal2-toast .swal2-success {
        border-color: #a5dc86
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
        position: absolute;
        width: 1.6em;
        height: 3em;
        transform: rotate(45deg);
        border-radius: 50%
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
        top: -.8em;
        left: -.5em;
        transform: rotate(-45deg);
        transform-origin: 2em 2em;
        border-radius: 4em 0 0 4em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
        top: -.25em;
        left: .9375em;
        transform-origin: 0 1.5em;
        border-radius: 0 4em 4em 0
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
        width: 2em;
        height: 2em
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
        top: 0;
        left: .4375em;
        width: .4375em;
        height: 2.6875em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
        height: .3125em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
        top: 1.125em;
        left: .1875em;
        width: .75em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
        top: .9375em;
        right: .1875em;
        width: 1.375em
    }

    .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip {
        -webkit-animation: swal2-toast-animate-success-line-tip .75s;
        animation: swal2-toast-animate-success-line-tip .75s
    }

    .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long {
        -webkit-animation: swal2-toast-animate-success-line-long .75s;
        animation: swal2-toast-animate-success-line-long .75s
    }

    .swal2-popup.swal2-toast.swal2-show {
        -webkit-animation: swal2-toast-show .5s;
        animation: swal2-toast-show .5s
    }

    .swal2-popup.swal2-toast.swal2-hide {
        -webkit-animation: swal2-toast-hide .1s forwards;
        animation: swal2-toast-hide .1s forwards
    }

    .swal2-container {
        display: grid;
        position: fixed;
        z-index: 1060;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        box-sizing: border-box;
        grid-template-areas: "top-start     top            top-end""center-start  center         center-end""bottom-start  bottom-center  bottom-end";
        grid-template-rows: minmax(-webkit-min-content, auto) minmax(-webkit-min-content, auto) minmax(-webkit-min-content, auto);
        grid-template-rows: minmax(min-content, auto) minmax(min-content, auto) minmax(min-content, auto);
        height: 100%;
        padding: .625em;
        overflow-x: hidden;
        transition: background-color .1s;
        -webkit-overflow-scrolling: touch
    }

    .swal2-container.swal2-backdrop-show,
    .swal2-container.swal2-noanimation {
        background: rgba(0, 0, 0, .4)
    }

    .swal2-container.swal2-backdrop-hide {
        background: 0 0 !important
    }

    .swal2-container.swal2-bottom-start,
    .swal2-container.swal2-center-start,
    .swal2-container.swal2-top-start {
        grid-template-columns: minmax(0, 1fr) auto auto
    }

    .swal2-container.swal2-bottom,
    .swal2-container.swal2-center,
    .swal2-container.swal2-top {
        grid-template-columns: auto minmax(0, 1fr) auto
    }

    .swal2-container.swal2-bottom-end,
    .swal2-container.swal2-center-end,
    .swal2-container.swal2-top-end {
        grid-template-columns: auto auto minmax(0, 1fr)
    }

    .swal2-container.swal2-top-start>.swal2-popup {
        align-self: start
    }

    .swal2-container.swal2-top>.swal2-popup {
        grid-column: 2;
        align-self: start;
        justify-self: center
    }

    .swal2-container.swal2-top-end>.swal2-popup,
    .swal2-container.swal2-top-right>.swal2-popup {
        grid-column: 3;
        align-self: start;
        justify-self: end
    }

    .swal2-container.swal2-center-left>.swal2-popup,
    .swal2-container.swal2-center-start>.swal2-popup {
        grid-row: 2;
        align-self: center
    }

    .swal2-container.swal2-center>.swal2-popup {
        grid-column: 2;
        grid-row: 2;
        align-self: center;
        justify-self: center
    }

    .swal2-container.swal2-center-end>.swal2-popup,
    .swal2-container.swal2-center-right>.swal2-popup {
        grid-column: 3;
        grid-row: 2;
        align-self: center;
        justify-self: end
    }

    .swal2-container.swal2-bottom-left>.swal2-popup,
    .swal2-container.swal2-bottom-start>.swal2-popup {
        grid-column: 1;
        grid-row: 3;
        align-self: end
    }

    .swal2-container.swal2-bottom>.swal2-popup {
        grid-column: 2;
        grid-row: 3;
        justify-self: center;
        align-self: end
    }

    .swal2-container.swal2-bottom-end>.swal2-popup,
    .swal2-container.swal2-bottom-right>.swal2-popup {
        grid-column: 3;
        grid-row: 3;
        align-self: end;
        justify-self: end
    }

    .swal2-container.swal2-grow-fullscreen>.swal2-popup,
    .swal2-container.swal2-grow-row>.swal2-popup {
        grid-column: 1/4;
        width: 100%
    }

    .swal2-container.swal2-grow-column>.swal2-popup,
    .swal2-container.swal2-grow-fullscreen>.swal2-popup {
        grid-row: 1/4;
        align-self: stretch
    }

    .swal2-container.swal2-no-transition {
        transition: none !important
    }

    .swal2-popup {
        display: none;
        position: relative;
        box-sizing: border-box;
        grid-template-columns: minmax(0, 100%);
        width: 32em;
        max-width: 100%;
        padding: 0 0 1.25em;
        border: none;
        border-radius: 5px;
        background: #fff;
        color: #545454;
        font-family: inherit;
        font-size: 1rem
    }

    .swal2-popup:focus {
        outline: 0
    }

    .swal2-popup.swal2-loading {
        overflow-y: hidden
    }

    .swal2-title {
        position: relative;
        max-width: 100%;
        margin: 0;
        padding: .8em 1em 0;
        color: inherit;
        font-size: 1.875em;
        font-weight: 600;
        text-align: center;
        text-transform: none;
        word-wrap: break-word
    }

    .swal2-actions {
        display: flex;
        z-index: 1;
        box-sizing: border-box;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        width: auto;
        margin: 1.25em auto 0;
        padding: 0
    }

    .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
        opacity: .4
    }

    .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
        background-image: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1))
    }

    .swal2-actions:not(.swal2-loading) .swal2-styled:active {
        background-image: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2))
    }

    .swal2-loader {
        display: none;
        align-items: center;
        justify-content: center;
        width: 2.2em;
        height: 2.2em;
        margin: 0 1.875em;
        -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
        animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
        border-width: .25em;
        border-style: solid;
        border-radius: 100%;
        border-color: #2778c4 transparent #2778c4 transparent
    }

    .swal2-styled {
        margin: .3125em;
        padding: .625em 1.1em;
        transition: box-shadow .1s;
        box-shadow: 0 0 0 3px transparent;
        font-weight: 500
    }

    .swal2-styled:not([disabled]) {
        cursor: pointer
    }

    .swal2-styled.swal2-confirm {
        border: 0;
        border-radius: .25em;
        background: initial;
        background-color: #7066e0;
        color: #fff;
        font-size: 1em
    }

    .swal2-styled.swal2-confirm:focus {
        box-shadow: 0 0 0 3px rgba(112, 102, 224, .5)
    }

    .swal2-styled.swal2-deny {
        border: 0;
        border-radius: .25em;
        background: initial;
        background-color: #dc3741;
        color: #fff;
        font-size: 1em
    }

    .swal2-styled.swal2-deny:focus {
        box-shadow: 0 0 0 3px rgba(220, 55, 65, .5)
    }

    .swal2-styled.swal2-cancel {
        border: 0;
        border-radius: .25em;
        background: initial;
        background-color: #6e7881;
        color: #fff;
        font-size: 1em
    }

    .swal2-styled.swal2-cancel:focus {
        box-shadow: 0 0 0 3px rgba(110, 120, 129, .5)
    }

    .swal2-styled.swal2-default-outline:focus {
        box-shadow: 0 0 0 3px rgba(100, 150, 200, .5)
    }

    .swal2-styled:focus {
        outline: 0
    }

    .swal2-styled::-moz-focus-inner {
        border: 0
    }

    .swal2-footer {
        justify-content: center;
        margin: 1em 0 0;
        padding: 1em 1em 0;
        border-top: 1px solid #eee;
        color: inherit;
        font-size: 1em
    }

    .swal2-timer-progress-bar-container {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        grid-column: auto !important;
        overflow: hidden;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px
    }

    .swal2-timer-progress-bar {
        width: 100%;
        height: .25em;
        background: rgba(0, 0, 0, .2)
    }

    .swal2-image {
        max-width: 100%;
        margin: 2em auto 1em
    }

    .swal2-close {
        z-index: 2;
        align-items: center;
        justify-content: center;
        width: 1.2em;
        height: 1.2em;
        margin-top: 0;
        margin-right: 0;
        margin-bottom: -1.2em;
        padding: 0;
        overflow: hidden;
        transition: color .1s, box-shadow .1s;
        border: none;
        border-radius: 5px;
        background: 0 0;
        color: #ccc;
        font-family: serif;
        font-family: monospace;
        font-size: 2.5em;
        cursor: pointer;
        justify-self: end
    }

    .swal2-close:hover {
        transform: none;
        background: 0 0;
        color: #f27474
    }

    .swal2-close:focus {
        outline: 0;
        box-shadow: inset 0 0 0 3px rgba(100, 150, 200, .5)
    }

    .swal2-close::-moz-focus-inner {
        border: 0
    }

    .swal2-html-container {
        z-index: 1;
        justify-content: center;
        margin: 1em 1.6em .3em;
        padding: 0;
        overflow: auto;
        color: inherit;
        font-size: 1.125em;
        font-weight: 400;
        line-height: normal;
        text-align: center;
        word-wrap: break-word;
        word-break: break-word
    }

    .swal2-checkbox,
    .swal2-file,
    .swal2-input,
    .swal2-radio,
    .swal2-select,
    .swal2-textarea {
        margin: 1em 2em 3px
    }

    .swal2-file,
    .swal2-input,
    .swal2-textarea {
        box-sizing: border-box;
        width: auto;
        transition: border-color .1s, box-shadow .1s;
        border: 1px solid #d9d9d9;
        border-radius: .1875em;
        background: 0 0;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px transparent;
        color: inherit;
        font-size: 1.125em
    }

    .swal2-file.swal2-inputerror,
    .swal2-input.swal2-inputerror,
    .swal2-textarea.swal2-inputerror {
        border-color: #f27474 !important;
        box-shadow: 0 0 2px #f27474 !important
    }

    .swal2-file:focus,
    .swal2-input:focus,
    .swal2-textarea:focus {
        border: 1px solid #b4dbed;
        outline: 0;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(100, 150, 200, .5)
    }

    .swal2-file::-moz-placeholder,
    .swal2-input::-moz-placeholder,
    .swal2-textarea::-moz-placeholder {
        color: #ccc
    }

    .swal2-file::placeholder,
    .swal2-input::placeholder,
    .swal2-textarea::placeholder {
        color: #ccc
    }

    .swal2-range {
        margin: 1em 2em 3px;
        background: #fff
    }

    .swal2-range input {
        width: 80%
    }

    .swal2-range output {
        width: 20%;
        color: inherit;
        font-weight: 600;
        text-align: center
    }

    .swal2-range input,
    .swal2-range output {
        height: 2.625em;
        padding: 0;
        font-size: 1.125em;
        line-height: 2.625em
    }

    .swal2-input {
        height: 2.625em;
        padding: 0 .75em
    }

    .swal2-file {
        width: 75%;
        margin-right: auto;
        margin-left: auto;
        background: 0 0;
        font-size: 1.125em
    }

    .swal2-textarea {
        height: 6.75em;
        padding: .75em
    }

    .swal2-select {
        min-width: 50%;
        max-width: 100%;
        padding: .375em .625em;
        background: 0 0;
        color: inherit;
        font-size: 1.125em
    }

    .swal2-checkbox,
    .swal2-radio {
        align-items: center;
        justify-content: center;
        background: #fff;
        color: inherit
    }

    .swal2-checkbox label,
    .swal2-radio label {
        margin: 0 .6em;
        font-size: 1.125em
    }

    .swal2-checkbox input,
    .swal2-radio input {
        flex-shrink: 0;
        margin: 0 .4em
    }

    .swal2-input-label {
        display: flex;
        justify-content: center;
        margin: 1em auto 0
    }

    .swal2-validation-message {
        align-items: center;
        justify-content: center;
        margin: 1em 0 0;
        padding: .625em;
        overflow: hidden;
        background: #f0f0f0;
        color: #666;
        font-size: 1em;
        font-weight: 300
    }

    .swal2-validation-message::before {
        content: "!";
        display: inline-block;
        width: 1.5em;
        min-width: 1.5em;
        height: 1.5em;
        margin: 0 .625em;
        border-radius: 50%;
        background-color: #f27474;
        color: #fff;
        font-weight: 600;
        line-height: 1.5em;
        text-align: center
    }

    .swal2-icon {
        position: relative;
        box-sizing: content-box;
        justify-content: center;
        width: 5em;
        height: 5em;
        margin: 2.5em auto .6em;
        border: .25em solid transparent;
        border-radius: 50%;
        border-color: #000;
        font-family: inherit;
        line-height: 5em;
        cursor: default;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none
    }

    .swal2-icon .swal2-icon-content {
        display: flex;
        align-items: center;
        font-size: 3.75em
    }

    .swal2-icon.swal2-error {
        border-color: #f27474;
        color: #f27474
    }

    .swal2-icon.swal2-error .swal2-x-mark {
        position: relative;
        flex-grow: 1
    }

    .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
        display: block;
        position: absolute;
        top: 2.3125em;
        width: 2.9375em;
        height: .3125em;
        border-radius: .125em;
        background-color: #f27474
    }

    .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
        left: 1.0625em;
        transform: rotate(45deg)
    }

    .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
        right: 1em;
        transform: rotate(-45deg)
    }

    .swal2-icon.swal2-error.swal2-icon-show {
        -webkit-animation: swal2-animate-error-icon .5s;
        animation: swal2-animate-error-icon .5s
    }

    .swal2-icon.swal2-error.swal2-icon-show .swal2-x-mark {
        -webkit-animation: swal2-animate-error-x-mark .5s;
        animation: swal2-animate-error-x-mark .5s
    }

    .swal2-icon.swal2-warning {
        border-color: #facea8;
        color: #f8bb86
    }

    .swal2-icon.swal2-warning.swal2-icon-show {
        -webkit-animation: swal2-animate-error-icon .5s;
        animation: swal2-animate-error-icon .5s
    }

    .swal2-icon.swal2-warning.swal2-icon-show .swal2-icon-content {
        -webkit-animation: swal2-animate-i-mark .5s;
        animation: swal2-animate-i-mark .5s
    }

    .swal2-icon.swal2-info {
        border-color: #9de0f6;
        color: #3fc3ee
    }

    .swal2-icon.swal2-info.swal2-icon-show {
        -webkit-animation: swal2-animate-error-icon .5s;
        animation: swal2-animate-error-icon .5s
    }

    .swal2-icon.swal2-info.swal2-icon-show .swal2-icon-content {
        -webkit-animation: swal2-animate-i-mark .8s;
        animation: swal2-animate-i-mark .8s
    }

    .swal2-icon.swal2-question {
        border-color: #c9dae1;
        color: #87adbd
    }

    .swal2-icon.swal2-question.swal2-icon-show {
        -webkit-animation: swal2-animate-error-icon .5s;
        animation: swal2-animate-error-icon .5s
    }

    .swal2-icon.swal2-question.swal2-icon-show .swal2-icon-content {
        -webkit-animation: swal2-animate-question-mark .8s;
        animation: swal2-animate-question-mark .8s
    }

    .swal2-icon.swal2-success {
        border-color: #a5dc86;
        color: #a5dc86
    }

    .swal2-icon.swal2-success [class^=swal2-success-circular-line] {
        position: absolute;
        width: 3.75em;
        height: 7.5em;
        transform: rotate(45deg);
        border-radius: 50%
    }

    .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left] {
        top: -.4375em;
        left: -2.0635em;
        transform: rotate(-45deg);
        transform-origin: 3.75em 3.75em;
        border-radius: 7.5em 0 0 7.5em
    }

    .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right] {
        top: -.6875em;
        left: 1.875em;
        transform: rotate(-45deg);
        transform-origin: 0 3.75em;
        border-radius: 0 7.5em 7.5em 0
    }

    .swal2-icon.swal2-success .swal2-success-ring {
        position: absolute;
        z-index: 2;
        top: -.25em;
        left: -.25em;
        box-sizing: content-box;
        width: 100%;
        height: 100%;
        border: .25em solid rgba(165, 220, 134, .3);
        border-radius: 50%
    }

    .swal2-icon.swal2-success .swal2-success-fix {
        position: absolute;
        z-index: 1;
        top: .5em;
        left: 1.625em;
        width: .4375em;
        height: 5.625em;
        transform: rotate(-45deg)
    }

    .swal2-icon.swal2-success [class^=swal2-success-line] {
        display: block;
        position: absolute;
        z-index: 2;
        height: .3125em;
        border-radius: .125em;
        background-color: #a5dc86
    }

    .swal2-icon.swal2-success [class^=swal2-success-line][class$=tip] {
        top: 2.875em;
        left: .8125em;
        width: 1.5625em;
        transform: rotate(45deg)
    }

    .swal2-icon.swal2-success [class^=swal2-success-line][class$=long] {
        top: 2.375em;
        right: .5em;
        width: 2.9375em;
        transform: rotate(-45deg)
    }

    .swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-tip {
        -webkit-animation: swal2-animate-success-line-tip .75s;
        animation: swal2-animate-success-line-tip .75s
    }

    .swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-long {
        -webkit-animation: swal2-animate-success-line-long .75s;
        animation: swal2-animate-success-line-long .75s
    }

    .swal2-icon.swal2-success.swal2-icon-show .swal2-success-circular-line-right {
        -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
        animation: swal2-rotate-success-circular-line 4.25s ease-in
    }

    .swal2-progress-steps {
        flex-wrap: wrap;
        align-items: center;
        max-width: 100%;
        margin: 1.25em auto;
        padding: 0;
        background: 0 0;
        font-weight: 600
    }

    .swal2-progress-steps li {
        display: inline-block;
        position: relative
    }

    .swal2-progress-steps .swal2-progress-step {
        z-index: 20;
        flex-shrink: 0;
        width: 2em;
        height: 2em;
        border-radius: 2em;
        background: #2778c4;
        color: #fff;
        line-height: 2em;
        text-align: center
    }

    .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
        background: #2778c4
    }

    .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step {
        background: #add8e6;
        color: #fff
    }

    .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line {
        background: #add8e6
    }

    .swal2-progress-steps .swal2-progress-step-line {
        z-index: 10;
        flex-shrink: 0;
        width: 2.5em;
        height: .4em;
        margin: 0 -1px;
        background: #2778c4
    }

    [class^=swal2] {
        -webkit-tap-highlight-color: transparent
    }

    .swal2-show {
        -webkit-animation: swal2-show .3s;
        animation: swal2-show .3s
    }

    .swal2-hide {
        -webkit-animation: swal2-hide .15s forwards;
        animation: swal2-hide .15s forwards
    }

    .swal2-noanimation {
        transition: none
    }

    .swal2-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll
    }

    .swal2-rtl .swal2-close {
        margin-right: initial;
        margin-left: 0
    }

    .swal2-rtl .swal2-timer-progress-bar {
        right: 0;
        left: auto
    }

    .leave-russia-now-and-apply-your-skills-to-the-world {
        display: flex;
        position: fixed;
        z-index: 1939;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 25px 0 20px;
        background: #20232a;
        color: #fff;
        text-align: center
    }

    .leave-russia-now-and-apply-your-skills-to-the-world div {
        max-width: 560px;
        margin: 10px;
        line-height: 146%
    }

    .leave-russia-now-and-apply-your-skills-to-the-world iframe {
        max-width: 100%;
        max-height: 55.5555555556vmin;
        margin: 16px auto
    }

    .leave-russia-now-and-apply-your-skills-to-the-world strong {
        border-bottom: 2px dashed #fff
    }

    .leave-russia-now-and-apply-your-skills-to-the-world button {
        display: flex;
        position: fixed;
        z-index: 1940;
        top: 0;
        right: 0;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        margin-right: 10px;
        margin-bottom: -10px;
        border: none;
        background: 0 0;
        color: #aaa;
        font-size: 48px;
        font-weight: 700;
        cursor: pointer
    }

    .leave-russia-now-and-apply-your-skills-to-the-world button:hover {
        color: #fff
    }

    @-webkit-keyframes swal2-toast-show {
        0% {
            transform: translateY(-.625em) rotateZ(2deg)
        }

        33% {
            transform: translateY(0) rotateZ(-2deg)
        }

        66% {
            transform: translateY(.3125em) rotateZ(2deg)
        }

        100% {
            transform: translateY(0) rotateZ(0)
        }
    }

    @keyframes swal2-toast-show {
        0% {
            transform: translateY(-.625em) rotateZ(2deg)
        }

        33% {
            transform: translateY(0) rotateZ(-2deg)
        }

        66% {
            transform: translateY(.3125em) rotateZ(2deg)
        }

        100% {
            transform: translateY(0) rotateZ(0)
        }
    }

    @-webkit-keyframes swal2-toast-hide {
        100% {
            transform: rotateZ(1deg);
            opacity: 0
        }
    }

    @keyframes swal2-toast-hide {
        100% {
            transform: rotateZ(1deg);
            opacity: 0
        }
    }

    @-webkit-keyframes swal2-toast-animate-success-line-tip {
        0% {
            top: .5625em;
            left: .0625em;
            width: 0
        }

        54% {
            top: .125em;
            left: .125em;
            width: 0
        }

        70% {
            top: .625em;
            left: -.25em;
            width: 1.625em
        }

        84% {
            top: 1.0625em;
            left: .75em;
            width: .5em
        }

        100% {
            top: 1.125em;
            left: .1875em;
            width: .75em
        }
    }

    @keyframes swal2-toast-animate-success-line-tip {
        0% {
            top: .5625em;
            left: .0625em;
            width: 0
        }

        54% {
            top: .125em;
            left: .125em;
            width: 0
        }

        70% {
            top: .625em;
            left: -.25em;
            width: 1.625em
        }

        84% {
            top: 1.0625em;
            left: .75em;
            width: .5em
        }

        100% {
            top: 1.125em;
            left: .1875em;
            width: .75em
        }
    }

    @-webkit-keyframes swal2-toast-animate-success-line-long {
        0% {
            top: 1.625em;
            right: 1.375em;
            width: 0
        }

        65% {
            top: 1.25em;
            right: .9375em;
            width: 0
        }

        84% {
            top: .9375em;
            right: 0;
            width: 1.125em
        }

        100% {
            top: .9375em;
            right: .1875em;
            width: 1.375em
        }
    }

    @keyframes swal2-toast-animate-success-line-long {
        0% {
            top: 1.625em;
            right: 1.375em;
            width: 0
        }

        65% {
            top: 1.25em;
            right: .9375em;
            width: 0
        }

        84% {
            top: .9375em;
            right: 0;
            width: 1.125em
        }

        100% {
            top: .9375em;
            right: .1875em;
            width: 1.375em
        }
    }

    @-webkit-keyframes swal2-show {
        0% {
            transform: scale(.7)
        }

        45% {
            transform: scale(1.05)
        }

        80% {
            transform: scale(.95)
        }

        100% {
            transform: scale(1)
        }
    }

    @keyframes swal2-show {
        0% {
            transform: scale(.7)
        }

        45% {
            transform: scale(1.05)
        }

        80% {
            transform: scale(.95)
        }

        100% {
            transform: scale(1)
        }
    }

    @-webkit-keyframes swal2-hide {
        0% {
            transform: scale(1);
            opacity: 1
        }

        100% {
            transform: scale(.5);
            opacity: 0
        }
    }

    @keyframes swal2-hide {
        0% {
            transform: scale(1);
            opacity: 1
        }

        100% {
            transform: scale(.5);
            opacity: 0
        }
    }

    @-webkit-keyframes swal2-animate-success-line-tip {
        0% {
            top: 1.1875em;
            left: .0625em;
            width: 0
        }

        54% {
            top: 1.0625em;
            left: .125em;
            width: 0
        }

        70% {
            top: 2.1875em;
            left: -.375em;
            width: 3.125em
        }

        84% {
            top: 3em;
            left: 1.3125em;
            width: 1.0625em
        }

        100% {
            top: 2.8125em;
            left: .8125em;
            width: 1.5625em
        }
    }

    @keyframes swal2-animate-success-line-tip {
        0% {
            top: 1.1875em;
            left: .0625em;
            width: 0
        }

        54% {
            top: 1.0625em;
            left: .125em;
            width: 0
        }

        70% {
            top: 2.1875em;
            left: -.375em;
            width: 3.125em
        }

        84% {
            top: 3em;
            left: 1.3125em;
            width: 1.0625em
        }

        100% {
            top: 2.8125em;
            left: .8125em;
            width: 1.5625em
        }
    }

    @-webkit-keyframes swal2-animate-success-line-long {
        0% {
            top: 3.375em;
            right: 2.875em;
            width: 0
        }

        65% {
            top: 3.375em;
            right: 2.875em;
            width: 0
        }

        84% {
            top: 2.1875em;
            right: 0;
            width: 3.4375em
        }

        100% {
            top: 2.375em;
            right: .5em;
            width: 2.9375em
        }
    }

    @keyframes swal2-animate-success-line-long {
        0% {
            top: 3.375em;
            right: 2.875em;
            width: 0
        }

        65% {
            top: 3.375em;
            right: 2.875em;
            width: 0
        }

        84% {
            top: 2.1875em;
            right: 0;
            width: 3.4375em
        }

        100% {
            top: 2.375em;
            right: .5em;
            width: 2.9375em
        }
    }

    @-webkit-keyframes swal2-rotate-success-circular-line {
        0% {
            transform: rotate(-45deg)
        }

        5% {
            transform: rotate(-45deg)
        }

        12% {
            transform: rotate(-405deg)
        }

        100% {
            transform: rotate(-405deg)
        }
    }

    @keyframes swal2-rotate-success-circular-line {
        0% {
            transform: rotate(-45deg)
        }

        5% {
            transform: rotate(-45deg)
        }

        12% {
            transform: rotate(-405deg)
        }

        100% {
            transform: rotate(-405deg)
        }
    }

    @-webkit-keyframes swal2-animate-error-x-mark {
        0% {
            margin-top: 1.625em;
            transform: scale(.4);
            opacity: 0
        }

        50% {
            margin-top: 1.625em;
            transform: scale(.4);
            opacity: 0
        }

        80% {
            margin-top: -.375em;
            transform: scale(1.15)
        }

        100% {
            margin-top: 0;
            transform: scale(1);
            opacity: 1
        }
    }

    @keyframes swal2-animate-error-x-mark {
        0% {
            margin-top: 1.625em;
            transform: scale(.4);
            opacity: 0
        }

        50% {
            margin-top: 1.625em;
            transform: scale(.4);
            opacity: 0
        }

        80% {
            margin-top: -.375em;
            transform: scale(1.15)
        }

        100% {
            margin-top: 0;
            transform: scale(1);
            opacity: 1
        }
    }

    @-webkit-keyframes swal2-animate-error-icon {
        0% {
            transform: rotateX(100deg);
            opacity: 0
        }

        100% {
            transform: rotateX(0);
            opacity: 1
        }
    }

    @keyframes swal2-animate-error-icon {
        0% {
            transform: rotateX(100deg);
            opacity: 0
        }

        100% {
            transform: rotateX(0);
            opacity: 1
        }
    }

    @-webkit-keyframes swal2-rotate-loading {
        0% {
            transform: rotate(0)
        }

        100% {
            transform: rotate(360deg)
        }
    }

    @keyframes swal2-rotate-loading {
        0% {
            transform: rotate(0)
        }

        100% {
            transform: rotate(360deg)
        }
    }

    @-webkit-keyframes swal2-animate-question-mark {
        0% {
            transform: rotateY(-360deg)
        }

        100% {
            transform: rotateY(0)
        }
    }

    @keyframes swal2-animate-question-mark {
        0% {
            transform: rotateY(-360deg)
        }

        100% {
            transform: rotateY(0)
        }
    }

    @-webkit-keyframes swal2-animate-i-mark {
        0% {
            transform: rotateZ(45deg);
            opacity: 0
        }

        25% {
            transform: rotateZ(-25deg);
            opacity: .4
        }

        50% {
            transform: rotateZ(15deg);
            opacity: .8
        }

        75% {
            transform: rotateZ(-5deg);
            opacity: 1
        }

        100% {
            transform: rotateX(0);
            opacity: 1
        }
    }

    @keyframes swal2-animate-i-mark {
        0% {
            transform: rotateZ(45deg);
            opacity: 0
        }

        25% {
            transform: rotateZ(-25deg);
            opacity: .4
        }

        50% {
            transform: rotateZ(15deg);
            opacity: .8
        }

        75% {
            transform: rotateZ(-5deg);
            opacity: 1
        }

        100% {
            transform: rotateX(0);
            opacity: 1
        }
    }

    body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
        overflow: hidden
    }

    body.swal2-height-auto {
        height: auto !important
    }

    body.swal2-no-backdrop .swal2-container {
        background-color: transparent !important;
        pointer-events: none
    }

    body.swal2-no-backdrop .swal2-container .swal2-popup {
        pointer-events: all
    }

    body.swal2-no-backdrop .swal2-container .swal2-modal {
        box-shadow: 0 0 10px rgba(0, 0, 0, .4)
    }

    @media print {
        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
            overflow-y: scroll !important
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
            display: none
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
            position: static !important
        }
    }

    body.swal2-toast-shown .swal2-container {
        box-sizing: border-box;
        width: 360px;
        max-width: 100%;
        background-color: transparent;
        pointer-events: none
    }

    body.swal2-toast-shown .swal2-container.swal2-top {
        top: 0;
        right: auto;
        bottom: auto;
        left: 50%;
        transform: translateX(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-top-end,
    body.swal2-toast-shown .swal2-container.swal2-top-right {
        top: 0;
        right: 0;
        bottom: auto;
        left: auto
    }

    body.swal2-toast-shown .swal2-container.swal2-top-left,
    body.swal2-toast-shown .swal2-container.swal2-top-start {
        top: 0;
        right: auto;
        bottom: auto;
        left: 0
    }

    body.swal2-toast-shown .swal2-container.swal2-center-left,
    body.swal2-toast-shown .swal2-container.swal2-center-start {
        top: 50%;
        right: auto;
        bottom: auto;
        left: 0;
        transform: translateY(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-center {
        top: 50%;
        right: auto;
        bottom: auto;
        left: 50%;
        transform: translate(-50%, -50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-center-end,
    body.swal2-toast-shown .swal2-container.swal2-center-right {
        top: 50%;
        right: 0;
        bottom: auto;
        left: auto;
        transform: translateY(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom-left,
    body.swal2-toast-shown .swal2-container.swal2-bottom-start {
        top: auto;
        right: auto;
        bottom: 0;
        left: 0
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom {
        top: auto;
        right: auto;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom-end,
    body.swal2-toast-shown .swal2-container.swal2-bottom-right {
        top: auto;
        right: 0;
        bottom: 0;
        left: auto
    }
    </style>
    <style type="text/css"
        data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">
    .fb_hidden {
        position: absolute;
        top: -10000px;
        z-index: 10001
    }

    .fb_reposition {
        overflow: hidden;
        position: relative
    }

    .fb_invisible {
        display: none
    }

    .fb_reset {
        background: none;
        border: 0;
        border-spacing: 0;
        color: #000;
        cursor: auto;
        direction: ltr;
        font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
        font-size: 11px;
        font-style: normal;
        font-variant: normal;
        font-weight: normal;
        letter-spacing: normal;
        line-height: 1;
        margin: 0;
        overflow: visible;
        padding: 0;
        text-align: left;
        text-decoration: none;
        text-indent: 0;
        text-shadow: none;
        text-transform: none;
        visibility: visible;
        white-space: normal;
        word-spacing: normal
    }

    .fb_reset>div {
        overflow: hidden
    }

    @keyframes fb_transform {
        from {
            opacity: 0;
            transform: scale(.95)
        }

        to {
            opacity: 1;
            transform: scale(1)
        }
    }

    .fb_animate {
        animation: fb_transform .3s forwards
    }

    .fb_hidden {
        position: absolute;
        top: -10000px;
        z-index: 10001
    }

    .fb_reposition {
        overflow: hidden;
        position: relative
    }

    .fb_invisible {
        display: none
    }

    .fb_reset {
        background: none;
        border: 0;
        border-spacing: 0;
        color: #000;
        cursor: auto;
        direction: ltr;
        font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
        font-size: 11px;
        font-style: normal;
        font-variant: normal;
        font-weight: normal;
        letter-spacing: normal;
        line-height: 1;
        margin: 0;
        overflow: visible;
        padding: 0;
        text-align: left;
        text-decoration: none;
        text-indent: 0;
        text-shadow: none;
        text-transform: none;
        visibility: visible;
        white-space: normal;
        word-spacing: normal
    }

    .fb_reset>div {
        overflow: hidden
    }

    @keyframes fb_transform {
        from {
            opacity: 0;
            transform: scale(.95)
        }

        to {
            opacity: 1;
            transform: scale(1)
        }
    }

    .fb_animate {
        animation: fb_transform .3s forwards
    }

    .fb_dialog {
        background: rgba(82, 82, 82, .7);
        position: absolute;
        top: -10000px;
        z-index: 10001
    }

    .fb_dialog_advanced {
        border-radius: 8px;
        padding: 10px
    }

    .fb_dialog_content {
        background: #fff;
        color: #373737
    }

    .fb_dialog_close_icon {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
        cursor: pointer;
        display: block;
        height: 15px;
        position: absolute;
        right: 18px;
        top: 17px;
        width: 15px
    }

    .fb_dialog_mobile .fb_dialog_close_icon {
        left: 5px;
        right: auto;
        top: 5px
    }

    .fb_dialog_padding {
        background-color: transparent;
        position: absolute;
        width: 1px;
        z-index: -1
    }

    .fb_dialog_close_icon:hover {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent
    }

    .fb_dialog_close_icon:active {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent
    }

    .fb_dialog_iframe {
        line-height: 0
    }

    .fb_dialog_content .dialog_title {
        background: #6d84b4;
        border: 1px solid #365899;
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        margin: 0
    }

    .fb_dialog_content .dialog_title>span {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
        float: left;
        padding: 5px 0 7px 26px
    }

    body.fb_hidden {
        height: 100%;
        left: 0;
        margin: 0;
        overflow: visible;
        position: absolute;
        top: -10000px;
        transform: none;
        width: 100%
    }

    .fb_dialog.fb_dialog_mobile.loading {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
        min-height: 100%;
        min-width: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 10001
    }

    .fb_dialog.fb_dialog_mobile.loading.centered {
        background: none;
        height: auto;
        min-height: initial;
        min-width: initial;
        width: auto
    }

    .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
        width: 100%
    }

    .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
        background: none
    }

    .loading.centered #fb_dialog_loader_close {
        clear: both;
        color: #fff;
        display: block;
        font-size: 18px;
        padding-top: 20px
    }

    #fb-root #fb_dialog_ipad_overlay {
        background: rgba(0, 0, 0, .4);
        bottom: 0;
        left: 0;
        min-height: 100%;
        position: absolute;
        right: 0;
        top: 0;
        width: 100%;
        z-index: 10000
    }

    #fb-root #fb_dialog_ipad_overlay.hidden {
        display: none
    }

    .fb_dialog.fb_dialog_mobile.loading iframe {
        visibility: hidden
    }

    .fb_dialog_mobile .fb_dialog_iframe {
        position: sticky;
        top: 0
    }

    .fb_dialog_content .dialog_header {
        background: linear-gradient(from(#738aba), to(#2c4987));
        border-bottom: 1px solid;
        border-color: #043b87;
        box-shadow: white 0 1px 1px -1px inset;
        color: #fff;
        font: bold 14px Helvetica, sans-serif;
        text-overflow: ellipsis;
        text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
        vertical-align: middle;
        white-space: nowrap
    }

    .fb_dialog_content .dialog_header table {
        height: 43px;
        width: 100%
    }

    .fb_dialog_content .dialog_header td.header_left {
        font-size: 12px;
        padding-left: 5px;
        vertical-align: middle;
        width: 60px
    }

    .fb_dialog_content .dialog_header td.header_right {
        font-size: 12px;
        padding-right: 5px;
        vertical-align: middle;
        width: 60px
    }

    .fb_dialog_content .touchable_button {
        background: linear-gradient(from(#4267B2), to(#2a4887));
        background-clip: padding-box;
        border: 1px solid #29487d;
        border-radius: 3px;
        display: inline-block;
        line-height: 18px;
        margin-top: 3px;
        max-width: 85px;
        padding: 4px 12px;
        position: relative
    }

    .fb_dialog_content .dialog_header .touchable_button input {
        background: none;
        border: none;
        color: #fff;
        font: bold 12px Helvetica, sans-serif;
        margin: 2px -12px;
        padding: 2px 6px 3px 6px;
        text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
    }

    .fb_dialog_content .dialog_header .header_center {
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        line-height: 18px;
        text-align: center;
        vertical-align: middle
    }

    .fb_dialog_content .dialog_content {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
        border: 1px solid #4a4a4a;
        border-bottom: 0;
        border-top: 0;
        height: 150px
    }

    .fb_dialog_content .dialog_footer {
        background: #f5f6f7;
        border: 1px solid #4a4a4a;
        border-top-color: #ccc;
        height: 40px
    }

    #fb_dialog_loader_close {
        float: left
    }

    .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
        visibility: hidden
    }

    #fb_dialog_loader_spinner {
        animation: rotateSpinner 1.2s linear infinite;
        background-color: transparent;
        background-image: url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
        background-position: 50% 50%;
        background-repeat: no-repeat;
        height: 24px;
        width: 24px
    }

    @keyframes rotateSpinner {
        0% {
            transform: rotate(0deg)
        }

        100% {
            transform: rotate(360deg)
        }
    }

    .fb_iframe_widget {
        display: inline-block;
        position: relative
    }

    .fb_iframe_widget span {
        display: inline-block;
        position: relative;
        text-align: justify
    }

    .fb_iframe_widget iframe {
        position: absolute
    }

    .fb_iframe_widget_fluid_desktop,
    .fb_iframe_widget_fluid_desktop span,
    .fb_iframe_widget_fluid_desktop iframe {
        max-width: 100%
    }

    .fb_iframe_widget_fluid_desktop iframe {
        min-width: 220px;
        position: relative
    }

    .fb_iframe_widget_lift {
        z-index: 1
    }

    .fb_iframe_widget_fluid {
        display: inline
    }

    .fb_iframe_widget_fluid span {
        width: 100%
    }

    .fb_mpn_mobile_landing_page_slide_out {
        animation-duration: 200ms;
        animation-name: fb_mpn_landing_page_slide_out;
        transition-timing-function: ease-in
    }

    .fb_mpn_mobile_landing_page_slide_out_from_left {
        animation-duration: 200ms;
        animation-name: fb_mpn_landing_page_slide_out_from_left;
        transition-timing-function: ease-in
    }

    .fb_mpn_mobile_landing_page_slide_up {
        animation-duration: 500ms;
        animation-name: fb_mpn_landing_page_slide_up;
        transition-timing-function: ease-in
    }

    .fb_mpn_mobile_bounce_in {
        animation-duration: 300ms;
        animation-name: fb_mpn_bounce_in;
        transition-timing-function: ease-in
    }

    .fb_mpn_mobile_bounce_out {
        animation-duration: 300ms;
        animation-name: fb_mpn_bounce_out;
        transition-timing-function: ease-in
    }

    .fb_mpn_mobile_bounce_out_v2 {
        animation-duration: 300ms;
        animation-name: fb_mpn_fade_out;
        transition-timing-function: ease-in
    }

    .fb_customer_chat_bounce_in_v2 {
        animation-duration: 300ms;
        animation-name: fb_bounce_in_v2;
        transition-timing-function: ease-in
    }

    .fb_customer_chat_bounce_in_from_left {
        animation-duration: 300ms;
        animation-name: fb_bounce_in_from_left;
        transition-timing-function: ease-in
    }

    .fb_customer_chat_bounce_out_v2 {
        animation-duration: 300ms;
        animation-name: fb_bounce_out_v2;
        transition-timing-function: ease-in
    }

    .fb_customer_chat_bounce_out_from_left {
        animation-duration: 300ms;
        animation-name: fb_bounce_out_from_left;
        transition-timing-function: ease-in
    }

    .fb_invisible_flow {
        display: inherit;
        height: 0;
        overflow-x: hidden;
        width: 0
    }

    @keyframes fb_mpn_landing_page_slide_out {
        0% {
            margin: 0 12px;
            width: 100% - 24px
        }

        60% {
            border-radius: 18px
        }

        100% {
            border-radius: 50%;
            margin: 0 24px;
            width: 60px
        }
    }

    @keyframes fb_mpn_landing_page_slide_out_from_left {
        0% {
            left: 12px;
            width: 100% - 24px
        }

        60% {
            border-radius: 18px
        }

        100% {
            border-radius: 50%;
            left: 12px;
            width: 60px
        }
    }

    @keyframes fb_mpn_landing_page_slide_up {
        0% {
            bottom: 0;
            opacity: 0
        }

        100% {
            bottom: 24px;
            opacity: 1
        }
    }

    @keyframes fb_mpn_bounce_in {
        0% {
            opacity: .5;
            top: 100%
        }

        100% {
            opacity: 1;
            top: 0
        }
    }

    @keyframes fb_mpn_fade_out {
        0% {
            bottom: 30px;
            opacity: 1
        }

        100% {
            bottom: 0;
            opacity: 0
        }
    }

    @keyframes fb_mpn_bounce_out {
        0% {
            opacity: 1;
            top: 0
        }

        100% {
            opacity: .5;
            top: 100%
        }
    }

    @keyframes fb_bounce_in_v2 {
        0% {
            opacity: 0;
            transform: scale(0, 0);
            transform-origin: bottom right
        }

        50% {
            transform: scale(1.03, 1.03);
            transform-origin: bottom right
        }

        100% {
            opacity: 1;
            transform: scale(1, 1);
            transform-origin: bottom right
        }
    }

    @keyframes fb_bounce_in_from_left {
        0% {
            opacity: 0;
            transform: scale(0, 0);
            transform-origin: bottom left
        }

        50% {
            transform: scale(1.03, 1.03);
            transform-origin: bottom left
        }

        100% {
            opacity: 1;
            transform: scale(1, 1);
            transform-origin: bottom left
        }
    }

    @keyframes fb_bounce_out_v2 {
        0% {
            opacity: 1;
            transform: scale(1, 1);
            transform-origin: bottom right
        }

        100% {
            opacity: 0;
            transform: scale(0, 0);
            transform-origin: bottom right
        }
    }

    @keyframes fb_bounce_out_from_left {
        0% {
            opacity: 1;
            transform: scale(1, 1);
            transform-origin: bottom left
        }

        100% {
            opacity: 0;
            transform: scale(0, 0);
            transform-origin: bottom left
        }
    }

    @keyframes slideInFromBottom {
        0% {
            opacity: .1;
            transform: translateY(100%)
        }

        100% {
            opacity: 1;
            transform: translateY(0)
        }
    }

    @keyframes slideInFromBottomDelay {
        0% {
            opacity: 0;
            transform: translateY(100%)
        }

        97% {
            opacity: 0;
            transform: translateY(100%)
        }

        100% {
            opacity: 1;
            transform: translateY(0)
        }
    }

    .btn-primary {
        color: #fff;
        background-color: <?=$color;?>;
        border-color: <?=$color;?>
    }
    #loading {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #fff;
        z-index: 9999;
    }

    #loading img {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100px;
        height: 100px;
    }

    </style>
</head>

<body style="" class="">
    <!-- <div id="loading">
        <img src="/templates/img/loader.svg?i=129129" alt="Loading...">
    </div>
    <script>
        window.addEventListener('load', function() {
            document.getElementById('loading').style.display = 'none';
        });

    </script> -->
    <!-- <input type="hidden" name="main_session"> -->
    <div class="mainbar" style="height: 150px;">
        <div class="navbar">
            <div class="container">
                <a href="/" class="text-left">
                    <div class="">
                        <img src="<?=$settings['logo'];?>" height="59px" alt="Logo">
                        <marquee width="100%" behavior="scroll" style="display: block;
position: fixed;
bottom: 70 px;
left: 15 px;
z-index: 1000;
cursor: pointer;
width: 100%;">
                            <font color="white"
                                style="text-shadow: 0 0 0.2em #ff0000, 0 0 0.2em #ff0000,  0 0 0.2em #ff0000"><b>Hiện
                                    nay có rất nhiều website giả mạo , fake <?=ucfirst($_SERVER['SERVER_NAME']);?> ,....
                                    Tất cả các web đều giả
                                    mạo các bạn không nên chơi thử mà chỉ chơi tại đây tránh mất tiền oan !!!</b></font>
                        </marquee>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="content-container">
                <div class="py-5" style="min-height: 80px !important;">
                    <div class="output" id="output">
                        <h3 class="cursor">
                            Chẵn lẻ Zalopay Tự Động </h3>
                        <h4>
                            Uy Tín - Nhanh Gọn - Tự Động 24/7 ! </h4>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#noteModal">Xem Lưu
                        Ý</button>
                </div>
                <div class="text-center mt-5">
                    <?php
                        foreach ($config_game as $data) {
                            if ($data['id'] == '1') {
                    ?>
                        <button class="btn btn-default mt-1 btn-info" data-game="<?=$data['game_code'];?>">
                            <?=$data['name'];?>
                        </button>
                    <?php } else { ?>
                        <button class="btn btn-default btn-primary mt-1" data-game="<?=$data['game_code'];?>">
                        <?=$data['name'];?>
                        </button>
                    <?php }} ?>
                    
                </div>
                <div class="text-center mt-5" role="group">
                    <button class="btn btn btn-outline-primary mt-1" data-minigame="giftcode"
                        style="position: relative;">
                        Nhập Gifcode
                        <b class="text-danger"
                            style="position: absolute;margin-left: auto;margin-right: auto;text-align: center;left: 0px;right: 0px;top: 22px;font-size: 9px;">
                            <font color="red">(NEW)</font>
                        </b>
                    </button>
                </div>
                <div class="row justify-content-md-center box-cl">
                    <div class="col-md-6 mt-3 cl">
                        <div class="panel panel-primary">
                            <div class="panel-heading text-center">
                                Cách chơi
                            </div>
                            <div class="play-rules">
                                <!-- game -->
                                <?php
                                    $list_des = array(
                                        '1END' => 'là một game tính kết quả bằng <b> 1 số cuối mã giao dịch</b>.',
                                        '2END' => 'là một game tính kết quả bằng <b> 2 số cuối mã giao dịch</b>.',
                                        'H2END' => 'là một game tính kết quả bằng hiệu <b> 2 số cuối mã giao dịch</b>.'
                                    );
                                    foreach ($config_game as $data) {
                                        $data_content = explode('|', $data['content']);
                                        $data_result = explode('|', $data['result']);
                                        $data_ratio = explode('|', $data['ratio']);
                                ?>
                                <div class="panel-body game <?=($data['id'] == '1') ? 'active' : '';?>" style="padding-top: 10px; padding-bottom: 20px;"
                                    game-tab="<?=$data['game_code'];?>">
                                    <p>- <b><?=$data['name'];?></b> <?=$list_des[$data['type_code']];?>
                                    </p>
                                    <p>-Cách chơi vô cùng đơn giản :</p>
                                    <p>- Chuyển tiền vào một trong các tài khoản <b>(Không chuyển tiền lại từ các giao dịch trước để tránh xảy ra lỗi)</b>:</p>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover text-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center text-white bg-primary">Số điện thoại</th>
                                                    <th class="text-center text-white bg-primary">Tối thiểu</th>
                                                    <th class="text-center text-white bg-primary">Tối đa</th>
                                                </tr>
                                            </thead>
                                            <tbody aria-live="polite" aria-relevant="all" class="result-table-10"
                                                role="alert" id="result-momo-<?=$data['game_code'];?>">
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-center font-weight-bold mb-3" id="timer-<?=$data['game_code'];?>"><b>Làm mới sau <span class="text-danger coundown-time">10</span> s</b></div>
                                    <p class="mt-3">
                                        <?=$data['description'];?>
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover text-center">
                                            <thead>
                                                <tr>
                                                    <th class="text-center text-white bg-primary">Mã Đuôi</th>
                                                    <th class="text-center text-white bg-primary"><?=$data['type'];?></th>
                                                    <th class="text-center text-white bg-primary">Tiền nhận</th>
                                                </tr>
                                            </thead>
                                            <tbody aria-live="polite" aria-relevant="all" class="" id="result-table"
                                                role="alert">
                                                <?php
                                                    for ($i = 0; $i < count($data_content); $i++) {
                                                        $content_game = $data_content[$i];
                                                        $result_game = explode('-', $data_result[$i]);
                                                        $ratio_game = $data_ratio[$i];
                                                ?>
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <b style="text-align: center; justify-content: center; display: flex">
                                                            <span class="label label-success text" style="margin-right: 2px"><?=$content_game;?></span>
                                                            <span class="label label-success text-uppercase" onclick="coppy_nd('<?=$content_game;?>')"><i class="fa fa-clipboard" aria-hidden="true"></i></span>
                                                        </b>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                        $j = 0;
                                                        foreach ($result_game as $content) {
                                                        ?>
                                                        <span class="fa-stack">
                                                            <span
                                                                class="fa fa-circle fa-stack-2x dot-text-<?=$j++;?>">
                                                            </span>
                                                            <span class="fa-stack-1x text-white comment-chan"><?=$content;?></span>
                                                        </span>
                                                        <?php } ?>
                                                    </td>
                                                    <td><b>x<?=$data_ratio[$i];?></b></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    - Tiền thắng sẽ = <b>Tiền cược*<?=$data_ratio[0];?></b><br> <b>- Lưu ý :
                                        Nếu chuyển sai hạn mức hoặc sai nội dung sẽ không được hoàn tiền.</b>
                                </div>
                                <?php } ?>
                            </div>


                            <!-- Điểm danh -->
                            <div class="minigame-rules">
                                <div class="panel-body game" style="padding-top: 10px; padding-bottom: 20px;"
                                    game-tab="giftcode">
                                    <style>
                                    #diemDanhCard {
                                        margin-top: 0.5rem;
                                        color: #155724;
                                        border-color: #c3e6cb;
                                    }

                                    #occard {
                                        margin-top: 0.5rem;
                                        color: #155724;
                                        background-color: #9cbca4;
                                        border-color: #c3e6cb;
                                        padding: 20px;
                                    }

                                    .occho {
                                        margin-top: 0.5rem;
                                        color: #155724;
                                        background-color: #aed6b8;
                                        border-color: #c3e6cb;
                                        padding: 20px;
                                    }
                                    </style>
                                    <div class="row collapse show" id="diemDanhCard" style="">
                                        <div class="col-lg-12">
                                            <div class="body">
                                                <div class="text-center">
                                                    <p style="line-height: 0.8;"></p>
                                                    <p style="font-size:120%;text-align:center;"><b>Gifcode</b>
                                                    </p>
                                                    <div class="form-group" id="non_query"
                                                        style="background-color: #7ee2ff; border-color: #ad4105; padding: 20px;">
                                                        <label for="partnerId">Mã code:</label>
                                                        <input type="text" class="form-control" name="giftcode"
                                                            id="giftcode" placeholder="ABCXYZ">
                                                        <label for="partnerId" style="margin-top: 10px;">Số điện
                                                            thoại:</label>
                                                        <input type="text" class="form-control" name="phoneCode"
                                                            id="phoneCode" placeholder="094xxxxxxx">
                                                        <small id="partnerId" class="form-text text-muted"
                                                            style="color: #ff0000">Nhập số điện thoại của
                                                            bạn để kiểm tra và
                                                            nhận
                                                            thưởng.</small> <br>
                                                        <button type="submit" class="btn btn-success"
                                                            onclick="check_Giftcode()">Kiểm Tra</button>
                                                    </div>
                                                    <div class="form-group" id="query_done" style="display: none;">
                                                    </div>
                                                    <div class="form-group bg-warning" id="day_mission_querying"
                                                        style="display: none;">Đang truy vấn...
                                                        xin chờ
                                                        nhé...
                                                    </div>
                                                    <div class="occho" id="muc_huongdan">
                                                        1. Một số điện thoại chỉ được nhập 1 mã/ngày. <br>
                                                        2. Mã code khuyến mại sẽ tùy vào điều kiện để sử dụng, có thời
                                                        hạn. <br>
                                                        3. Mã code khuyến mại sẽ được cấp theo các chương trình khuyến
                                                        mại của hệ thống Momo Lô Tô. <br>
                                                        4. Vui lòng liên hệ chát CSKH để biết thêm chi tết khi bạn nhận
                                                        được CODE. <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                function check_Giftcode() {
                                    let phone = $("#phoneCode").val();
                                    let code = $("#giftcode").val();
                                    if (phone.length <= 9) {
                                        alert('Số điện thoại không hợp lệ');
                                        return false;
                                    }
                                    $("#non_query").hide();
                                    $("#day_mission_querying").show();
                                    $.ajax({
                                        url: '/api/v2/gifcode',
                                        data: {
                                            phone: phone,
                                            code: code
                                        },
                                        type: 'POST',
                                        success: function(result1) {
                                            result = JSON.parse(result1);
                                            if (result.status == 'success') {
                                                alert(result.msg);
                                                $("#non_query").show();
                                                $("#day_mission_querying").hide();
                                            } else {
                                                alert(result.msg);
                                                $("#non_query").show();
                                                $("#day_mission_querying").hide();
                                            }
                                        }
                                    })
                                }
                                </script>
                            </div>
                        </div>
                    </div>
                    


                    <!-- Kiểm tra mã giao dịch -->
                    <div class="col-md-6 mt-3 cl">
                        <div class="panel panel-primary">
                            <div class="panel-heading text-center">
                                KIỂM TRA MÃ GIAO DỊCH
                            </div>
                            <div class="panel-body text-center">
                                <div class="alert alert-info text-left">
                                    Nếu quá 15 phút chưa nhận được tiền vui lòng dán mã vào đây để kiểm tra.
                                </div>
                                <div class="text-center">
                                    <div class="form-group">
                                        <label for="check-trans">Nhập mã giao dịch</label>
                                        <input type="number" class="form-control" id="tran_id"
                                            placeholder="Mã giao dịch: Ví dụ 11223344556">
                                        <small id="checkHelp" class="form-text text-muted">Nhập mã giao dịch của bạn để
                                            kiểm tra.</small>
                                    </div>
                                    <button id="submit" class="btn btn-primary mb-2 check-tran"
                                        onclick="check_tranid()">Kiểm tra</button>
                                    <div id="result-check" style="margin-top: 5px;">
                                    </div>
                                </div>
                                <script>
                                function check_tranid() {
                                    var trans_id = $("#tran_id").val();
                                    $.ajax({
                                        type: "POST",
                                        url: "/api/public/lichsu",
                                        data: {
                                            trans_id
                                        },
                                        success: function(result1) {
                                            result = JSON.parse(result1);
                                            document.getElementById("submit").disabled = false;
                                            if (result.status == 'success') {
                                                $("#result-check").attr("class", "").addClass(
                                                    "alert alert-success").html(`
                                                        <p>Mã Giao Dịch: ${result.data.trans_id}</p>
                                                        <p>Số Điện Thoại: ${result.data.phone}</p>
                                                        <p>Zalopay Chơi: ${result.data.account}</p>
                                                        <p>Zalopay Trả Thưởng: ${result.data.phone_result}</p>
                                                        <p>Trò Chơi: ${result.data.game}</p>
                                                        <p>Tiền Cược: ${result.data.trans_amount}đ</p>
                                                        <p>Nội Dung: ${result.data.description}</p>
                                                        <p>Kết Quả: ${result.data.result}</p>
                                                        <p>Tiền Thắng: ${result.data.bonus}đ</p>
                                                        <p>Nội Dung Trả: ${result.data.msg_bonus}</p>
                                                        <p>Trạng Thái: ${result.data.status_text}</p>
                                                        <p>Thời Gian: ${result.data.time}</p>
                                                    `);
                                            } else {
                                                $("#result-check").attr("class", "").addClass(
                                                    "alert alert-danger").html(result.msg);
                                            }
                                        },
                                    });

                                }
                                </script>
                                </br>
                                <div class="text-center mt-3">
                                    <a class="" href="<?="https://t.me/" . $settings['tele'];?>" target="_blank">
                                        <span class="btn btn-info text-uppercase">SUPPORT TELEGRAM</span>
                                    </a>
                                    <a class="text-white" href="<?=$settings['box_tele'];?>" target="_blank">
                                        <span class="btn btn-info text-uppercase">BOX TELEGRAM</span>
                                    </a>
                                </div>
                                <div class="text-center mt-3">
                                    <p>
                                        <a class="text-white" href="<?=$settings['video'];?>" target="_blank">
                                            <span class="btn btn-success text-uppercase">Video Hướng Dẫn Chơi</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 text-center panel panel-primary">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="text-center mb-3">
                            <h3 class="text-uppercase">
                                TRẠNG THÁI ZALOPAY
                            </h3>
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover text-center">
                                <thead>
                                    <tr class="bg-primary" role="row">
                                        <th class="text-center text-white">
                                            Số điện thoại
                                        </th>
                                        <th class="text-center text-white">
                                            Trạng thái
                                        </th>
                                        <th class="text-center text-white">
                                            Giao dịch
                                        </th>
                                        <th class="text-center text-white">
                                            Hạn mức
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="momo-status">
                                </tbody>
                            </table>
                            <div class="text-center font-weight-bold m-3" id="timer-list-momo"><b>Làm mới sau <span class="text-danger coundown-time">9</span> s</b></div>
                        </div>
                    </div>
</div>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="text-center mb-3">
                            <h3 class="text-uppercase">
                                Lịch sử tham gia
                            </h3>
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover text-center">
                                <thead>
                                    <tr class="bg-primary" role="row">
                                        <th class="text-center text-white">
                                            Số điện thoại
                                        </th>
                                        <th class="text-center text-white">
                                            Tiền đặt
                                        </th>
                                        <th class="text-center text-white">
                                            Game
                                        </th>
                                        <th class="text-center text-white">
                                            Nội dung
                                        </th>
                                        <th class="text-center text-white">
                                            Trạng thái
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="body_his"></tbody>
                            </table>
                            <div class="text-center font-weight-bold m-3" id="timer"><b>Làm mới sau <span class="text-danger coundown-time">10</span> s</b></div>
                        </div>
</div>
                    </div>
                </div>
            </div>
            <?php if ($settings['top_status'] == 'on') { ?> 
            <div class="panel panel-primary week_top">
                <div class="panel-heading text-center">
                    <h4>TOP THẮNG TUẦN</h4>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover text-center">
                            <thead>
                                <tr role="row" class="bg-primary">
                                    <th class="text-center text-white">TOP</th>
                                    <th class="text-center text-white">Số điện thoại</th>
                                    <th class="text-center text-white">Số tiền</th>
                                    <th class="text-center text-white">Phần thưởng</th>
                                </tr>
                            </thead>
                            <tbody role="alert" aria-live="polite" aria-relevant="all" id="week_top"
                                class="text-center">
                                <?php 
                                date_default_timezone_set('Asia/Ho_Chi_Minh');
                                $time_week = strtotime("this week 00:00:00");
                                $list = $soicoder->fetch_assoc("SELECT DISTINCT `phone` FROM `history` ", 0);
                                $i = 1;
                                $list_top = [];
                                $reward_top = explode('/', $settings['reward_top']);
                                foreach ($list as $data) {
                                    $phone = $data['phone'];
                                    // echo "SELECT SUM(`trans_amount`) FROM `history` WHERE `trans_amount` >= 0 AND `bonus` >= 0 AND `time` >= '" . $time_week . "' AND `phone` =  '" . $phone . "' ORDER BY 'SUM(`trans_amount`)' desc";
                                    $topreal = $soicoder->fetch_assoc("SELECT SUM(`trans_amount`) FROM `history` WHERE `trans_amount` >= 0 AND `time` >= '" . $time_week . "' AND `phone` =  '" . $phone . "' ORDER BY 'SUM(`trans_amount`)' desc", 1);
                                    $list_top[$phone] = $topreal['SUM(`trans_amount`)'];
                                }
                                arsort($list_top);
                                $dem = 0;
                                foreach ($list_top as $phone => $trans_amount) {
                                    $dem++;
                                    if ($dem > 5) {break;}
                                ?>
                                <tr>
                                    <td><span class="fa-stack"> <span
                                                class="fa fa-circle fa-stack-2x text-danger"></span><strong
                                                class="fa-stack-1x text-white"><?=$dem;?></strong></span></td>
                                    <td class="col-xs-2"><span
                                            class="label label-success"><?=$phone;?></span></td>
                                    <td class="col-xs-5 text-center"><span
                                            class="label label-danger"><?=format_cash($trans_amount);?>&nbsp;₫</span>
                                    </td>
                                    <td class="col-xs-5 text-center"><span
                                            class="label label-danger"><?=format_cash($reward_top[$dem - 1]);?>&nbsp;₫</span>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <b class="text-danger">Phần thưởng TOP sẽ dược trao vào 24h chủ nhật hàng tuần.</b>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            
        </div>
    </div>
    </div>
    <footer class="footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-xs-12 text-white ">
                    Copyright 2023 © <?=$_SERVER['SERVER_NAME'];?> | All rights reserved
                </div>
            </div>
        </div>
    </footer>
    <!-- noteModal -->

    <div class="modal fade" id="noteModal" tabindex="-1" role="dialog" style="overflow: scroll; display: block; overflow-y: scroll; animation: 3s;" aria-hidden="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="noteModalLabel">Thông báo</h5>
                    <button type="button" class="close" onclick="$('#noteModal').hide();" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?=$settings['event'];?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="$('#noteModal').hide();"
                        data-dismiss="modal">Đã hiểu</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://js.pusher.com/7.0/pusher.min.js" id="pusher-js"></script>
    <script src="assets/js2/wheel.min.js?V2"></script>
    <script src="assets/js2/jquery-1.10.1.min.js"></script>
    <script src="assets/js2/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js2/bootstrap.min.js"></script>
    <script src="assets/js2/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-notify@0.5.4/dist/simple-notify.min.js"></script>
    
    <script>

    setTimeout(function() {
        $('#noteModal').addClass('in');
    }, 800);


    window.addEventListener('DOMContentLoaded', (event) => {
        $('[data-toggle="tooltip"]').tooltip();
        $('.cash-format').each(function(index) {
            $(this).html(parseInt($(this).text()).toLocaleString('it-IT', {
                style: 'currency',
                currency: 'VND'
            }));
        });
        $('button[data-game]').click(function() {
            let button = $(this);
            let game = button.attr('data-game');
            game_active = game;
            $('.game').removeClass('active');
            $(`.game[game-tab=${game}]`).addClass('active').removeClass("hidden");
            $("button[data-game]").removeClass("btn-info").addClass("btn-primary");
            $("[data-minigame]").removeClass("btn-success");
            button.removeClass("btn-primary").addClass("btn-info");
        });
        $('button[data-minigame]').click(function() {
            let button = $(this);
            let game = button.attr('data-minigame');
            game_active = "minigame";
            $('.game').removeClass('active');
            $(`.game[game-tab=${game}]`).addClass('active').removeClass("hidden");
            $("[data-minigame]").removeClass("btn-success");
            $("[data-game]").removeClass("btn-success").addClass("btn-primary");
            button.addClass("btn-success");
        });
    });

    function copyStringToClipboard(str) {
        // Create new element
        var el = document.createElement('textarea');
        // Set value (string to be copied)
        el.value = str;
        // Set non-editable to avoid focus and move outside of view
        el.setAttribute('readonly', '');
        el.style = {
            position: 'absolute',
            left: '-9999px'
        };
        document.body.appendChild(el);
        // Select text inside element
        el.select();
        // Copy text to clipboard
        document.execCommand('copy');
        // Remove temporary element
        document.body.removeChild(el);
    }


    function coppy2(text) {
        copyStringToClipboard(text);
        alert('Đã sao chép số điện thoại này. Chúc bạn may mắn.');
    }
    function coppy(text, min, max) {
        copyStringToClipboard(text);
        alert("Đã sao chép số: " + text + " chơi từ " + (min) + " VNĐ đến " + (max) + " VNĐ. Nếu bạn chuyển nhỏ hơn hoặc lớn thua sẽ mất tiền.  ");
    }
    function coppy_nd(text) {
        copyStringToClipboard(text);
        alert("Đã sao chép nội dung: " + text);
    }
    function play(t) {
        window.open('https://social.zalopay.vn/mt-gateway/v1/private-qr?note=&receiver_id=' + t, "_blank");
    }

    function check_ls() {
        $.ajax({
            url: "api/v2/win",
            success: function(json) {
                const data = JSON.parse(json);
                let body = '';
                data.forEach((data) => {
                    let color_change = '#' + ((1 << 24) * (Math.random() + 1) | 0).toString(16)
                        .substr(1);
                    body += `<tr>
                                <td>${data.phone}</td>
                                <td>${data.amount_play}&nbsp;₫</td>
                                <td>${data.game}</td>
                                <td>
                                    <b style="text-align: center; justify-content: center; display: flex">
                                        <span class="label label-success text" style="margin-right: 2px">${data.comment}</span>
                                    </b>
                                </td>
                                <td><span class="label label-success text-uppercase">Thắng</span></td>
                            </tr>`;

                });
                return_timer();
                $('#body_his').html(body);
            }
        })
    }

    function load_acount(game) {
        $.ajax({
            url: "api/v2/getPhone",
            success: function(json) {
                const data = JSON.parse(json);
                let body = '';
                data.forEach((data) => {
                    let color_change = '#' + ((1 << 24) * (Math.random() + 1) | 0).toString(16)
                        .substr(1);
                    body += `<tr>
                                <td id="mm_${data.phone}">
                                    <b id="mln">
                                        ${data.phone} <b id="hmln" attr-name="amount"
                                            class="">
                                            <font color="${data.color}">${data.sum_chuyentien}</font>/<font color="6861b1">50M</font>
                                        </b>
                                        <b id="hmln" class="hidden" attr-name="times">
                                            <font color="red">${data.sum_gd} VND</font>/<font
                                                color="6861b1">200
                                                Giao dịch
                                            </font>
                                        </b>
                                    </b>
                                    <span class="label label-success text-uppercase"
                                        onclick="coppy('${data.phone}', '${data.min}', '${data.max}')"><i
                                            class="fa fa-clipboard" aria-hidden="true"></i></span>
                                    <span class="label label-success text-uppercase"
                                        onclick="play('${data.user_id}')"><i
                                            class="fa fa-play" aria-hidden="true"></i></span>
                                </td>
                                <td>${data.min} VNĐ</td>
                                <td>${data.max} VNĐ</td>
                            </tr>`;

                });
                return_timer_game(game);
                $('#result-momo-' + game).html(body);
            }
        })
    }

    function list_acount() {
        $.ajax({
            url: "api/v2/getPhone",
            success: function(json) {
                const data = JSON.parse(json);
                let body = '';
                data.forEach((data) => {
                    let color_change = '#' + ((1 << 24) * (Math.random() + 1) | 0).toString(16)
                        .substr(1);
                    body += `<tr>
                                <td>${data.phone} <span class="label label-success text-uppercase"
                                        onclick="coppy2('${data.phone}')"><i class="fa fa-clipboard"
                                            aria-hidden="true"></i></span> <span
                                        class="label label-success text-uppercase"
                                        onclick="play('${data.user_id}')"><i class="fa fa-play"
                                            aria-hidden="true"></i></span></td>
                                <td><span class="label label-success text-uppercase">Hoạt động</span></td>
                                <td><strong><span class="text-danger">Không giới hạn</span></strong></td>
                                <td><strong><span class="text-danger cash-format">${data.sum_chuyentien}&nbsp;VND</span>/50M</strong></td>
                            </tr>`;

                });
                return_timer_game('list-momo');
                $('#momo-status').html(body);
            }
        })
    }
    <?php
        foreach ($config_game as $data) {
    ?>
    load_acount('<?=$data['game_code'];?>');
    <?php } ?>
    list_acount();
    check_ls();


    setInterval(function() {
        <?php
            foreach ($config_game as $data) {
        ?>
        load_acount('<?=$data['game_code'];?>');
    <?php } ?>
        list_acount();
        check_ls();
    }, 12000);

    function return_timer_game(game) {
        var count = 11;

        var counter = setInterval(timer, 1000); //1000 will  run it every 1 second
        function timer() {
            count = count - 1;
            if (count <= 0) {
                clearInterval(counter);
                return;
            }
            document.getElementById("timer-" + game).innerHTML = "<b>Làm mới sau <span class='text-danger coundown-time'>" +
                count + "</span> s</b>"; // watch for spelling
        }
    }


    function return_timer() {
        var count = 11;

        var counter = setInterval(timer, 1000); //1000 will  run it every 1 second
        function timer() {
            count = count - 1;
            if (count <= 0) {
                clearInterval(counter);
                return;
            }
            document.getElementById("timer").innerHTML = "Làm mới sau <span class='text-danger coundown-time'>" +
                count + "</span> s</b>"; // watch for spelling
        }
    }

    </script>

    <div class="notifications-container notify-is-right notify-is-top" style="--distance:20px;"></div>
</body>

</html>




