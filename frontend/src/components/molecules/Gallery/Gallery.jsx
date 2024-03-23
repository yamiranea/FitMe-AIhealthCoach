import React from "react";
import FirstImg from "../../../assets/images/1.jpg";
import SecondImg from "../../../assets/images/2.jpg";
import ThirdImg from "../../../assets/images/3.jpg";
import FourthImg from "../../../assets/images/4.png";
import FifthImg from "../../../assets/images/5.jpg";

const Gallery = () => {
  return (
    <div className="grid grid-cols-2 md:grid-cols-4 gap-4">
      <div className="grid gap-4">
        <div>
          <img className="h-auto max-w-full rounded-lg" src={FirstImg} alt="" />
        </div>
        <div>
          <img
            className="h-auto max-w-full rounded-lg"
            src={SecondImg}
            alt=""
          />
        </div>
        <div>
          <img className="h-auto max-w-full rounded-lg" src={ThirdImg} alt="" />
        </div>
      </div>
      <div className="grid gap-4">
        <div>
          <img
            className="h-auto max-w-full rounded-lg"
            src={FourthImg}
            alt=""
          />
        </div>
        <div>
          <img className="h-auto max-w-full rounded-lg" src={FifthImg} alt="" />
        </div>
        <div>
          <img
            className="h-auto max-w-full rounded-lg"
            src="https://img.freepik.com/free-photo/orange-cocktail-concept-fresh-delicious-summer-citrus-cocktail_185193-109974.jpg?t=st=1710971505~exp=1710975105~hmac=075cad8c2bbf8cf44ada8f56918994bbb701f0773de738e6961dd372b0b535a8&w=1800"
            alt=""
          />
        </div>
      </div>
      <div className="grid gap-4">
        <div>
          <img
            className="h-auto max-w-full rounded-lg"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg"
            alt=""
          />
        </div>
        <div>
          <img
            className="h-auto max-w-full rounded-lg"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg"
            alt=""
          />
        </div>
        <div>
          <img
            className="h-auto max-w-full rounded-lg"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg"
            alt=""
          />
        </div>
      </div>
      <div className="grid gap-4">
        <div>
          <img
            className="h-auto max-w-full rounded-lg"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg"
            alt=""
          />
        </div>
        <div>
          <img
            className="h-auto max-w-full rounded-lg"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg"
            alt=""
          />
        </div>
        <div>
          <img
            className="h-auto max-w-full rounded-lg"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg"
            alt=""
          />
        </div>
      </div>
    </div>
  );
};

export default Gallery;
