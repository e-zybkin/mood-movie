import React from "react";
import { Link } from "react-scroll";

function Footer() {
  return (
    <footer className="footer" id="contact">
      <div className="footer__menu">
        <h3 className="footer__title">MoodMovie</h3>
        <nav className="footer__nav">
          <Link
            className="footer__link"
            to="intro"
            spy={true}
            smooth={true}
            offset={-70}
            duration={500}
          >Главная</Link>
          <Link
            className="footer__link"
            to="loc"
            spy={true}
            smooth={true}
            offset={-70}
            duration={500}
          >Кинотеатры</Link>
          <Link
            className="footer__link"
            to="contact"
            spy={true}
            smooth={true}
            offset={-70}
            duration={500}
          >Контакты</Link>
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
