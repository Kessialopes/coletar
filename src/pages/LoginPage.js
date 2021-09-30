import React, { useState, useEffect } from 'react'
import { useHistory } from 'react-router-dom'

import styled from 'styled-components'
import axios from 'axios'

import Logo from '../imge/logo-spacet.png'

const baseUrl = '.'

function LoginPage() {
  const [email, setEmail] = useState('')
  const [password, setPassword] = useState('')

  const history = useHistory()

  useEffect(() => {
    const token = window.localStorage.getItem('token')

    if (token !== null) {
      history.push('/HomePage')
    }
  }, [history])

  const handleEmailUser = e => {
    setEmail(e.target.value)
  }
  const handlePasswordUser = e => {
    setPassword(e.target.value)
  }
  const login = async e => {
    e.preventDefault()
    const loginBody = {
      email: email,
      password: password
    }
    try {
      const response = await axios.post(`${baseUrl}/login`, loginBody)

      window.localStorage.setItem('token', response.data.token)
      alert('Login efetuado com sucesso')
      history.push('HomePage')
    } catch (err) {
      console.log(err)
      alert('Oops! Algo deu errado, tente novamente.')
    }
  }

  const goToHomePage = () => {
    history.push('/')
  }

  return (
    <>
      <Header>
        <ImageLogo src={Logo}></ImageLogo>
        <Navegation onClick={goToHomePage}>Home</Navegation>
      </Header>
      <hr />
      <FormLogin onSubmit={login}>
        <label>
          Email:{' '}
          <input
            value={email}
            name="email"
            type="email"
            onChange={handleEmailUser}
          />
        </label>
        <label>
          Senha:{' '}
          <input
            value={password}
            name="password"
            type="password"
            onChange={handlePasswordUser}
          />
        </label>
        <Loginbtn>Entrar</Loginbtn>
      </FormLogin>
    </>
  )
}
export default LoginPage
