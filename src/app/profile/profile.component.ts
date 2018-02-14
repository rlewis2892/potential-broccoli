import {Component, OnInit} from "@angular/core";
import {ActivatedRoute, Params} from "@angular/router";
import {ProfileService} from "../shared/services/profile.service";
import {Profile} from "../shared/classes/profile";
import {Status} from "../shared/classes/status";
import {Observable} from "rxjs";
import "rxjs/add/observable/from";
import "rxjs/add/operator/switchMap";


@Component({
	//templateUrl: "./profile.html"
	template: require("./profile.html")
})

export class ProfileComponent {

/*	profile: Profile = new Profile(0, "", "", "", "", "");
	status: Status = null;

	constructor(private profileService: ProfileService, private route: ActivatedRoute) {}

	ngOnInit() : void {
		this.route.params
			.switchMap((params : Params) => this.profileService.getProfile(+params["id"]))
			.subscribe(reply => this.profile = reply);
	}*/
}