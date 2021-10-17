import styled from 'styled-components'

export const NavBarStyled = styled.header`
  width: 100%;
  margin: 0;
  background-color: #1c1c1c;
  z-index: 999;
  position: fixed;
  border-bottom: 1px solid #fff;
  padding: 16px;
`

export const MenuContentStyled = styled.div`
  position: absolute;
  z-index: 4;
  width: 100%;
  background-color: #1c1c1c;
  overflow: hidden;
  display: none;
  height: 40px;
`

export const menuIcon = styled.img`
  cursor: pointer;
`

export const MenuStyled = styled.ul`
  list-style: none;
  margin: 0;
  padding: 0 10%;
  overflow: hidden;
  font-size: 1rem;
  display: flex;
  justify-content: space-between;

  li a {
    display: block-inline;
    color: #fff;
    text-align: center;
    padding: 16px;
    outline: none;
    text-decoration: none;
  }
  li:hover {
    cursor: pointer;
    background-color: #000000;
  }
`
