import React from "react";
import { Route, Routes, Navigate, useNavigate } from "react-router-dom";

function App() {

  return (
    <div className="page">
      <div className="wrapper">
        <Header

        />
        <Routes>
          <Route
            path="/"
            element={
              <Main

              />
            }
          />
          <Route
            path="/romantic"
            element={
              <CinemaSkyScraper

              />
            }
          />
          <Route
            path="/horror"
            element={
              <CinemaForest

              />
            }
          />
          <Route
            path="/retro"
            element={
              <CinemaDesert

              />
            }
          />
        </Routes>
      </div>
    </div>
  );
}

export default App;
