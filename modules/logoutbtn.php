<?php
echo "<style>
.button2 {
  height: 50px;
  width: 150px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  transition: all 0.5s ease-in-out;
}

.button2:hover {
  box-shadow: 0.5px 0.5px 150px #252525;
}

.type1::after {
  content: 'Thanks';
  height: 50px;
  width: 150px;
  background-color: #008080;
  color: #fff;
  position: absolute;
  top: 0%;
  left: 0%;
  transform: translateY(50px);
  font-size: 1.2rem;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.5s ease-in-out;
}

.type1::before {
  content: 'Log Out';
  height: 50px;
  width: 150px;
  background-color: #fff;
  color: #008080;
  position: absolute;
  top: 0%;
  left: 0%;
  transform: translateY(0px) scale(1.2);
  font-size: 1.2rem;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.5s ease-in-out;
}

.type1:hover::after {
  transform: translateY(0) scale(1.2);
}

.type1:hover::before {
  transform: translateY(-50px) scale(0) rotate(120deg);
}
</style>";
?>