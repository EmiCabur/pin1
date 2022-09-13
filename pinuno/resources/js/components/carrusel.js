import React from 'react';
import ReactDOM from 'react-dom';
import React, { Component } from 'react';
export default class carrusel extends Component {
  render() {
 return (
  <carrusel variant="dark">
    <carrusel.Item>
      <img
        className="d-block w-100"
        src="holder.js/800x400?text=First slide&bg=f5f5f5"
        alt="First slide"
      />
      <carrusel.Caption>
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </carrusel.Caption>
    </carrusel.Item>
    <carrusel.Item>
      <img
        className="d-block w-100"
        src="holder.js/800x400?text=Second slide&bg=eee"
        alt="Second slide"
      />
      <carrusel.Caption>
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </carrusel.Caption>
    </carrusel.Item>
    <carrusel.Item>
      <img
        className="d-block w-100"
        src="holder.js/800x400?text=Third slide&bg=e5e5e5"
        alt="Third slide"
      />
      <carrusel.Caption>
        <h5>Third slide label</h5>
        <p>
          Praesent commodo cursus magna, vel scelerisque nisl consectetur.
        </p>
      </carrusel.Caption>
    </carrusel.Item>
  </carrusel>
);
}}
if (document.getElementById('carrrusel')) {
  ReactDOM.render(<Carrusel />, document.getElementById('carrusel'));
}