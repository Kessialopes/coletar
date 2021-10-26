import React, { Component } from 'react'
import { connect } from 'react-redux'
import { withStyles } from '@material-ui/styles'
import Container from '@material-ui/core/Container'
import Button from '@material-ui/core/Button'
import TextField from '@material-ui/core/TextField'
import Typography from '@material-ui/core/Typography'
import Link from '@material-ui/core/Link'

export class UserRegister extends Component {
  render() {
    return (
      <div>
        <Container component="main" maxWidth="xs">
          <div className="mt-3mt-md-5">
            <div className="text-center">
              <img src="logocoletar.png" />
              <Typography
                className="mt-3 font-weight-normal"
                component="h1"
                variant="h6"
              >
                Seja Bem-vindo!
              </Typography>
            </div>
            <div className="mt-4">
              <TextField
                variante="outlined"
                margin="normal"
                required
                fullWidth
                id="username"
                label="Seu Nome"
                name="username"
                type="text"
              />

              <div className="mt-4">
                <TextField
                  variante="outlined"
                  margin="normal"
                  required
                  fullWidth
                  id="email"
                  label="email"
                  name="usernames"
                  type="email"
                />

                <TextField
                  variante="outlined"
                  margin="normal"
                  required
                  fullWidth
                  id="password"
                  label="Senha"
                  name="password"
                  type="password"
                />

                <Button
                  type="button"
                  variant="contained"
                  fullWidth
                  color="primary"
                  size="large"
                  className="mb-3 mb-md-4 mt-4"
                >
                  Cadastrar
                </Button>
              </div>
            </div>
          </div>
        </Container>
      </div>
    )
  }
}

const mapStateToProps = state => ({})

const mapDispatchToProps = {}

export default connect(mapStateToProps, mapDispatchToProps)(UserRegister)
