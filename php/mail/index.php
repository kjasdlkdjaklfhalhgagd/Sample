<?php

if (mail("kurosofi.school@gmail.com", "TEST MAIL", "This is a test message.", "From: from@example.com")) {
  echo "メールが送信されました。";
} else {
  echo "メールの送信に失敗しました。";
}