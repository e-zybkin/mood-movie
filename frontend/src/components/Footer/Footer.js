import React from "react";

function Footer() {
  return (
    <footer className="footer">
      <div className="footer__menu">
        <h3 className="footer__title">MoodMovie</h3>
        <nav className="footer__nav">
          <a className="footer__link" href="/#">Главная</a>
          <a className="footer__link" href="/#">Кинотеатры</a>
          <a className="footer__link" href="/#">Контакты</a>
        </nav>
        <p className="footer__copyright">&copy; {new Date().getFullYear()} ChelikiTeam</p>
      </div>
      <div className="footer__description">
        <p className="footer__description-point">123112, Россия, Москва,<br /> Пресненская набережная., 8 стр 1</p>
        <p className="footer__description-point">8 (800) 999 77 66</p>
        <p className="footer__description-point">moodmovie@yandex.ru</p>
      </div>
      <ul className="footer__timetable">
        <li className="footer__time-point">пн 9:00 - 00:00</li>
        <li className="footer__time-point">вт 9:00 - 00:00</li>
        <li className="footer__time-point">ср 9:00 - 00:00</li>
        <li className="footer__time-point">чт 9:00 - 00:00</li>
        <li className="footer__time-point">пт 9:00 - 00:00</li>
        <li className="footer__time-point">сб 8:00 - 01:00</li>
        <li className="footer__time-point">вс 8:00 - 01:00</li>
      </ul>
    </footer>
  );
}

export default Footer;
