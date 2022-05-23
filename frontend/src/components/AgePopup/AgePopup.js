import React from "react";
import Popup from "../Popup/Popup";

function AgePopup(props) {
  return(
    <Popup isOpen={props.isOpen} name="age" onClose={props.onClose}>
      <p className="popup__text popup__age-text">Вам уже исполнилось 18 лет?</p>
      <div className="popup__age-buttons">
        <button type="button" onClick={props.onFilm} className="popup__button buttons">Да</button>
        <button type="button" onClick={props.onClose} className="popup__button buttons">Нет</button>
      </div>
    </Popup>
  );
}

export default AgePopup;
