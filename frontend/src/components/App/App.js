import React from "react";
import { Route, Routes, Navigate, useNavigate } from "react-router-dom";
import Main from '../Main/Main';
import Cinema from '../Cinema/Cinema';
import AgePopup from '../AgePopup/AgePopup';
import BarPopup from '../BarPopup/BarPopup';
import FilmPopup from '../FilmPopup/FilmPopup';

function App() {
  const [isAgeCheckPopupOpen, setIsAgeCheckPopupOpen] = React.useState(false);
  const [isBarShowPopupOpen, setIsBarShowPopupOpen] = React.useState(false);
  const [isFilmShowPopupOpen, setIsFilmShowPopupOpen] = React.useState(false);
  const [selectedFilm, setSelectedFilm] = React.useState({});

  function handleAgeCheck() {
    setIsAgeCheckPopupOpen(true);
  }

  function handleFilmShow(film) {
    setIsAgeCheckPopupOpen(false);
    setIsFilmShowPopupOpen(true);
    setSelectedFilm(film);
  }

  function handleBarShowClick() {
    setIsBarShowPopupOpen(true);
  }

  function closeAllPopups() {
    setIsAgeCheckPopupOpen(false);
    setIsFilmShowPopupOpen(false);
    setIsBarShowPopupOpen(false);
    setSelectedFilm({})
  }

  return (
    <div className="page">
      <div className="wrapper">
        <Routes>
          <Route
            path="/"
            element={
              <Main
                onBarClick={handleBarShowClick}
              />
            }
          />

          <Route
            path="/cinema"
            element={
              <Cinema
                onFilmClick={handleAgeCheck}
                onSubmitClick={handleFilmShow}
              />
            }
          />
        </Routes>

        <AgePopup
          isOpen={isAgeCheckPopupOpen}
          onClose={closeAllPopups}
        />

        <BarPopup
          isOpen={isBarShowPopupOpen}
          onClose={closeAllPopups}
        />

        <FilmPopup
          film={selectedFilm}
          isOpen={isFilmShowPopupOpen}
          onClose={closeAllPopups}
        />

      </div>
    </div>
  );
}

export default App;
