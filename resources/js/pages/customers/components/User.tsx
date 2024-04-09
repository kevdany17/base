import React, { SyntheticEvent } from "react";
import { IProps } from "../Props";
import axios from "axios";

const User = (props: IProps) => {

	const nextStep = async (e: SyntheticEvent) => {
		e.preventDefault();
		if (props.values.before_user != props.values.user) {
			await axios.get("/api/v1/customers/validate/" + (props.values.user as string),
			).then(response => {
				if (response.status == 200) {
					if ((response.data as { data: boolean }).data === true) {
						alert("Usuario ya registrado");
					} else {
						props.nextStep();
					}
				}
			}).catch();
		} else {
			props.nextStep();
		}
	};

	const prevStep = () => {
		props.prevStep();
	};

	return (
		<form onSubmit={nextStep}>
			<div className="row">
				<div className="col-md-6">
					<div className="mb-3">
						<label htmlFor="user" className="form-label">Usuario</label>
						<input type="email" className="form-control" name="user" id="user" placeholder="example@example.com" value={props.values.user} onChange={e => props.handleChange({ user: e.target.value })}
							required maxLength={80} pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" />
					</div>
				</div>
				<div className="col-md-6">
					<div className="mb-3">
						<label htmlFor="password" className="form-label">Contraseña</label>
						{
							props.values.id == 0 ?
								<input type="password" className="form-control" name="password" id="password" placeholder="****" value={props.values.password} onChange={e => props.handleChange({ password: e.target.value })}
									required pattern="^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&_*])[a-zA-Z0-9!@#$%^&_*]{8,}$"
									title="La contraseña debe tener al menos 8 caracteres, incluyendo al menos una letra mayúscula, un número y un carácter especial (!@#$%^&*)" />
							  :
								<input type="password" className="form-control" name="password" id="password" placeholder="****" value={props.values.password} onChange={e => props.handleChange({ password: e.target.value })}
									pattern="^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&_*])[a-zA-Z0-9!@#$%^&_*]{8,}$"
									title="La contraseña debe tener al menos 8 caracteres, incluyendo al menos una letra mayúscula, un número y un carácter especial (!@#$%^&*)" />
						}
						{props.values.id != 0 ? <span>Dejar vacío si no desea cambiar la contraseña</span> : <span></span>}
					</div>
				</div>
				<div className="col-md-12 text-center">
					<button className="btn btn-primary" onClick={prevStep}>Anterior</button>
					<button type="submit" className="btn btn-primary" style={{ marginLeft: "10px" }}>Siguiente</button>
				</div>
			</div>
		</form>

	);
};

export default User;
