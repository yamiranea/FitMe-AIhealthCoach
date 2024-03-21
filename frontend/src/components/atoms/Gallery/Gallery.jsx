import React from "react";

const Gallery = () => {
  return (
    <div className="grid grid-cols-2 md:grid-cols-4 gap-4">
      <div className="grid gap-4">
        <div>
          <img
            className="h-auto max-w-full rounded-lg"
            src="https://img.freepik.com/free-photo/flat-lay-composition-healthy-vegetarian-food_23-2148908769.jpg?t=st=1710971582~exp=1710975182~hmac=01ccf82095c9ad71c29f5e9bad02fe945d61601aec8922ab434e24d6de273821&w=826"
            alt=""
          />
        </div>
        <div>
          <img
            className="h-auto max-w-full rounded-lg"
            src="https://img.freepik.com/free-photo/front-view-woman-tying-her-hair_23-2148267162.jpg?t=st=1710971386~exp=1710974986~hmac=8d6ca948f10e090c911d59965223340c37cecd40d0d6f60958c13a384df273ee&w=1060"
            alt=""
          />
        </div>
        <div>
          <img
            className="h-auto max-w-full rounded-lg"
            src="https://img.freepik.com/free-photo/juice-smoothie-ingredients-plate_23-2148502293.jpg?t=st=1710971801~exp=1710975401~hmac=b19258548472a387b01d75237a2f5e394cc9f3de48a607b04c4fc3e07d79e0a2&w=1800"
            alt=""
          />
        </div>
      </div>
      <div className="grid gap-4">
        <div>
          <img
            className="h-auto max-w-full rounded-lg"
            src="https://img.freepik.com/free-photo/full-shot-athlete-tying-her-shoelaces_23-2148267174.jpg?t=st=1710971990~exp=1710975590~hmac=e5e05a874ee29d536f3f833507565df48945f15e6f27bae4e04a882ba2ed7b6c&w=996"
            alt=""
          />
        </div>
        <div>
          <img
            className="h-auto max-w-full rounded-lg"
            src="https://img.freepik.com/free-photo/arrangement-healthy-vegetarian-food_23-2148908739.jpg?t=st=1710972730~exp=1710976330~hmac=68650d3994fe8ad534d95173322e1b16429b93aad427e2934f688b810bc55463&w=826"
            alt=""
          />
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
