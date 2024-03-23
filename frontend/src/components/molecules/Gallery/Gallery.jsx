import React from "react";
import FirstImg from "../../../assets/images/1.jpg";
import SecondImg from "../../../assets/images/2.jpg";
import ThirdImg from "../../../assets/images/3.jpg";
import FourthImg from "../../../assets/images/4.png";
import FifthImg from "../../../assets/images/5.jpg";
import SixthImg from "../../../assets/images/6.png";
import SevenImg from "../../../assets/images/7.jpg";
import EightImg from "../../../assets/images/8.jpg";
import NineImg from "../../../assets/images/9.jpg";
import TenImg from "../../../assets/images/10.png";
import ElevenImg from "../../../assets/images/11.jpg";
import TwelveImg from "../../../assets/images/12.png";

const Gallery = () => {
  return (
    <div className="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
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
          <img className="h-auto max-w-full rounded-lg" src={SixthImg} alt="" />
        </div>
      </div>
      <div className="grid gap-4">
        <div>
          <img className="h-auto max-w-full rounded-lg" src={SevenImg} alt="" />
        </div>
        <div>
          <img className="h-auto max-w-full rounded-lg" src={EightImg} alt="" />
        </div>
        <div>
          <img className="h-auto max-w-full rounded-lg" src={NineImg} alt="" />
        </div>
      </div>
      <div className="grid gap-4">
        <div>
          <img className="h-auto max-w-full rounded-lg" src={TenImg} alt="" />
        </div>
        <div>
          <img
            className="h-auto max-w-full rounded-lg"
            src={ElevenImg}
            alt=""
          />
        </div>
        <div>
          <img
            className="h-auto max-w-full rounded-lg"
            src={TwelveImg}
            alt=""
          />
        </div>
      </div>
    </div>
  );
};

export default Gallery;
