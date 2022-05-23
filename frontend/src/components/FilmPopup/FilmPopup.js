import Popup from "../Popup/Popup";

//некоторые классы стилей стоит объединить, например film-header и film-info

function FilmPopup(props) {
  return(
    <Popup isOpen={props.isOpen} name="film" onClose={props.onClose}>
      <div className="popup__film-box">
        <div className="popup__film-header">
          <h4 className="popup__film-title">Ла-Ла-Ленд</h4> {/*props.title*/}
          <p className="popup__film-age">16+</p> {/*props.age*/}
        </div>
        <div className="popup__film-info">
          <p className="popup__film-about">Лу Кларк знает, сколько шагов от автобусной
            остановки до ее дома. Она знает, что ей очень нравится работа в кафе
            и что, скорее всего, она не любит своего бойфренда Патрика. Но Лу не знает,
            что вот-вот потеряет свою работу и что в ближайшем будущем ей понадобятся
            все силы, чтобы преодолеть свалившиеся на нее проблемы.
            Уилл Трейнор знает, что сбивший его мотоциклист отнял у него желание жить.
            И он точно знает, что надо сделать, чтобы положить конец всему этому.
            Но он не знает, что Лу скоро ворвется в его мир буйством красок.
            И они оба не знают, что навсегда изменят жизнь друг друга.</p> {/*props.text*/}
          <div className="popup__film-trailer">
            <iframe
              src='https://www.youtube.com/embed/lneNCBIXD4I'
              title="YouTube video player"
              frameBorder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowFullScreen
            /> {/*props.video*/}
          </div>
        </div>
        <p className="popup__film-link">
          Взято с источника: <a
            className="popup__film-link buttons"
            href="https://www.kinopoisk.ru/film/841081/"
            rel="noreferrer"
            target="_blank">
              https://www.kinopoisk.ru/film/841081/
          </a>
        </p> {/*props.link*/}
      </div>
    </Popup>
  );
}

export default FilmPopup;
