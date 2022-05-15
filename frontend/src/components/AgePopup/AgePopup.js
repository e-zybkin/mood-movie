import React from "react";
import Popup from "../Popup/Popup";

function AgePopup(props) {
  return(
    <Popup isOpen={props.isOpen} name="age" onClose={props.onClose}>
      <p className="popup__text">Вам уже исполнилось 18 лет?</p>
      <div>
        <button type="button" onClick={props} className="popup__button">Да</button>
        <button type="button" onClick={props} className="popup__button">Нет</button>
      </div>
    </Popup>
  );
}

export default AgePopup;
